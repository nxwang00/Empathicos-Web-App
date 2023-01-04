<?php

namespace App\Http\DataProviders\Web\Dashboard\BadgeCategory;

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
        return datatables()->of($this->data())
            ->addColumn('status', function ($category) {
                return statusButton('admin.badge-categories', $category);
            })
            ->addColumn('name', function ($category) {
                return ucfirst(Str::words($category->name, '10'));
            })
            ->addColumn('description', function ($category) {
                return Str::words($category->description, '30');
            })
            ->addColumn('action', function ($category) {
                $btn = viewButton('admin.badge-categories', $category);
                $btn .= editButton('admin.badge-categories', $category);
                $btn .= trashButton('admin.badge-categories', $category);
                return $btn;
            })
            ->addColumn('template', function ($category) {
                return '<a href="'.route('admin.badge-categories.templates',$category->id).'" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Tamplates"><i class="nav-icon fa fa-eye font-weight-bold"></i> Tamplates </a>';
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
        $data = BadgeCategory::query();
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
