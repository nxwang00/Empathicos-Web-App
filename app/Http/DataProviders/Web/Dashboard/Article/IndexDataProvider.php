<?php

namespace App\Http\DataProviders\Web\Dashboard\Article;

use App\Article;
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
            ->addColumn('status', function ($article) {
                return statusButton('admin.articles', $article);
            })
            ->addColumn('title', function ($article) {
                return ucfirst(Str::words($article->title, '5'));
            })
            ->addColumn('description', function ($article) {
                return Str::words($article->description, '15');
            })
            ->addColumn('action', function ($article) {
                $btn = viewButton('admin.articles', $article);
                $btn .= editButton('admin.articles', $article);
                $btn .= trashButton('admin.articles', $article);
                return $btn;
            })
            ->rawColumns(['title', 'status', 'description', 'action'])
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
        $data = Article::query()->orderBy('id', 'desc');
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
                $query = $query->where('title', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
