<?php

namespace App\Http\DataProviders\Web\Dashboard\Topic;

use App\Topic;
use App\Mainsubcat;
use App\Maincat;
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
            ->addColumn('title', function ($topic) {
                return $topic->title;
            })
             ->addColumn('description', function ($topic) {
                return $topic->description;
            })
             ->addColumn('category', function ($topic) {
                $category = Mainsubcat::find($topic->category_id);
                $category_title = $category->title;
                return $category_title;
            })
            ->addColumn('action', function ($topic) {
                $btn = viewButton('admin.topics', $topic);
                $btn .= editButton('admin.topics', $topic);
                $btn .= trashButton('admin.topics', $topic);
                return $btn;
            })
            ->rawColumns(['title','description','category','action'])
            ->make(true);
    }

    //meta data info...
    public function meta()
    {
        return [
            'categories' => Mainsubcat::where('cat_id', 5)->get()
        ];
    }

    //data results...
    protected function data()
    {
        $data = Topic::query();
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
                $query = $query->where('title', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
