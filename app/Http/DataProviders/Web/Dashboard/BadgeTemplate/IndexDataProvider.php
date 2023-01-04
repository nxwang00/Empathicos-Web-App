<?php

namespace App\Http\DataProviders\Web\Dashboard\BadgeTemplate;

use App\Badge;
use App\BadgeTemplate;
use Datatables;
use Illuminate\Http\Request;
use Str;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //data tables...
    public function datatables()
    {
        $types = BadgeTemplate::TYPES;

        return datatables()->of($this->data())
            ->addColumn('value', function ($badgeTemplate) {
                $value = json_decode($badgeTemplate->value);
                return '
                <p>' . $value->title . '<br>' . Str::words($value->description, '30') . '</p>
                ';
            })
            ->addColumn('image', function ($badgeTemplate) {
                $value = json_decode($badgeTemplate->value);
                return $value->image;
            })
            ->addColumn('template', function ($badgeTemplate) use ($types) {
                return ucfirst($types[$badgeTemplate->field]);
            })
            ->addColumn('badge', function ($badgeTemplate) {
                return Badge::where('id', $badgeTemplate->badge_id)->pluck('name')->implode('');
            })
            ->addColumn('action', function ($badgeTemplate) {
                $btn = viewButton('admin.badge-templates', $badgeTemplate,'Character Template');
                $btn .= editButton('admin.badge-templates', $badgeTemplate,'Character Template');
                $btn .= trashButton('admin.badge-templates', $badgeTemplate,'Character Template');
                return $btn;
            })
            ->rawColumns(['value', 'field', 'badge', 'image', 'action'])
            ->make(true);
    }

    //meta data info...
    public function meta()
    {
        return [
            'badges' => Badge::where('status', 1)->get(),
        ];
    }

    //data results...
    protected function data()
    {
        $data = BadgeTemplate::query();
        $data = $this->search($data);
        $data = $this->filter($data);

        return $data;
    }

    //data filter...
    protected function filter($object = null)
    {
        if (!empty($this->request->badge) && $this->request->badge != 'all') {
            $object = $object->whereBadgeId($this->request->badge);
        }
        return $object;
    }

    //data search...
    protected function search($object = null)
    {
        if (!empty($this->request->keywords)) {
            $q      = $this->request->keywords;
            $object = $object->where(function ($query) use ($q) {
                $query = $query->where('field', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
