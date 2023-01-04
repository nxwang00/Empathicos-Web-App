<?php

namespace App\Http\DataProviders\Web\Dashboard\Template;

use App\Template;
use App\BadgeCategory;
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
        $types = Template::TYPES;

        return datatables()->of($this->data())
            ->addColumn('value', function ($template) {
                $value =  json_decode($template->value);
                return '
                <p>'.$value->title.'<br>'.Str::words($value->description, '30').'</p>
                ';
            })
             ->addColumn('image', function ($template) {
                $value =  json_decode($template->value);
                return $value->image;
            })
            ->addColumn('template', function ($template) use ($types) {
                return ucfirst($types[$template->field]);
            })
             ->addColumn('category', function ($template) {
                return BadgeCategory::where('id',$template->category_id)->pluck('name')->implode('');
            })
            ->addColumn('action', function ($template) {
                $btn = viewButton('admin.templates', $template);
                $btn .= editButton('admin.templates', $template);
                $btn .= trashButton('admin.templates', $template);
                return $btn;
            })
            ->rawColumns(['value','field','category','image','action'])
            ->make(true);
    }

    //meta data info...
    public function meta()
    {
        return [
            'categories' => BadgeCategory::where('status',1)->get()
        ];
    }

    //data results...
    protected function data()
    {
        $data = Template::query();
        $data = $this->search($data);
        $data = $this->filter($data);

        return $data;
    }

    //data filter...
    protected function filter($object = null)
    {
        if (!empty($this->request->category) && $this->request->category != 'all') {
            $object = $object->whereCategoryId($this->request->category);
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
