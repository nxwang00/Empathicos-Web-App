<?php

namespace App\Http\DataProviders\Web\Dashboard\category;

use App\Category;
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
                return statusButton('admin.categories', $category);
            })
            ->addColumn('name', function ($category) {
                return ucfirst(Str::words($category->name, '10'));
            })
            ->addColumn('description', function ($category) {
                return Str::words($category->description, '30');
            })
            ->addColumn('action', function ($category) {
                $btn = viewButton('admin.categories', $category);
                $btn .= editButton('admin.categories', $category);
                $btn .= trashButton('admin.categories', $category);
                return $btn;
            })
            ->rawColumns(['title', 'status', 'name', 'description', 'action'])
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
        $data = Category::query();
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
