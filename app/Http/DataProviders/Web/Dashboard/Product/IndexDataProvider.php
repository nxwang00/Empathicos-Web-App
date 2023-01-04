<?php

namespace App\Http\DataProviders\Web\Dashboard\Product;

use App\Product;
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
            ->addColumn('status', function ($product) {
                return statusButton('admin.products', $product);
            })
            ->addColumn('name', function ($product) {
                return ucfirst(Str::words($product->name, '10'));
            })
            ->addColumn('price', function ($product) {
                return '$'.$product->price;
            })
            ->addColumn('description', function ($product) {
                return Str::words($product->description, '30');
            })
             ->addColumn('categories', function ($product) {
                return Category::whereIn('id',json_decode($product->categories))->pluck('name')->implode(',');
            })
            
            ->addColumn('action', function ($product) {
                $btn = viewButton('admin.products', $product);
                $btn .= editButton('admin.products', $product);
                $btn .= trashButton('admin.products', $product);
                return $btn;
            })
            ->rawColumns(['title', 'status', 'name', 'description','categories', 'action'])
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
        $data = Product::query();
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
