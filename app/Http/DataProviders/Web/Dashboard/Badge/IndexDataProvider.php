<?php

namespace App\Http\DataProviders\Web\Dashboard\Badge;

use App\Badge;
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
        return datatables()->of($this->data())
            ->addColumn('status', function ($badge) {
                return statusButton('admin.badges', $badge, 'Character');
            })
            ->addColumn('name', function ($badge) {
                return ucfirst(Str::words($badge->name, '10'));
            })
            ->addColumn('description', function ($badge) {
                return Str::words($badge->description, '30');
            })
            ->addColumn('action', function ($badge) {
                $btn = viewButton('admin.badges', $badge, 'Character');
                $btn .= editButton('admin.badges', $badge, 'Character');
                $btn .= trashButton('admin.badges', $badge, 'Character');
                return $btn;
            })
            ->addColumn('template', function ($badge) {
                return '<a href="'.route('admin.badges.templates',$badge->id).'" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Templates"><i class="nav-icon fa fa-eye font-weight-bold"></i> Templates </a>';
            })
            ->rawColumns(['title', 'status', 'name', 'description','template', 'action'])
            ->make(true);
    }

    //meta data info...
    public function meta()
    {
        return [

        ];
    }

    //data results...
    protected function data()
    {
        $data = Badge::query();
        $data = $this->search($data);
        $data = $this->filter($data);

        return $data;
    }

    //data filter...
    protected function filter($object = null)
    {
        if (!empty($this->request->status) && $this->request->status != 'all') {
            $status = ($this->request->status == 'active') ? '1' : '2';
            $object = $object->whereStatus($status);
        }
        return $object;
    }

    //data search...
    protected function search($object = null)
    {
        if (!empty($this->request->keywords)) {
            $q      = $this->request->keywords;
            $object = $object->where(function ($query) use ($q) {
                $query = $query->where('name', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
