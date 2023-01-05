<?php

namespace App\Http\DataProviders\Web\Dashboard\Content;

use App\Content;
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
        $types = Content::TYPES;

        return datatables()->of($this->data())
            ->addColumn('value', function ($content) {
                $value =  json_decode($content->value);
                return '
                <p>'.$value->title.'<br>'.Str::words($value->description, '30').'</p>
                ';
            })
             ->addColumn('image', function ($content) {
                $value =  json_decode($content->value);
                return $value->image;
            })
            ->addColumn('template', function ($content) use ($types) {
                return ucfirst($types[$content->field]);
            })
             ->addColumn('category', function ($content) {
                $category = Mainsubcat::find($content->category_id);
                $category_title = $category->title;
                $main_category_title = Maincat::where('id',$category->cat_id)->pluck('title')->implode('');
                return $main_category_title . " > " . $category_title;
            })
            ->addColumn('action', function ($content) {
                $btn = viewButton('admin.contents', $content);
                $btn .= editButton('admin.contents', $content);
                $btn .= trashButton('admin.contents', $content);
                return $btn;
            })
            ->rawColumns(['value','field','category','image','action'])
            ->make(true);
    }

    //meta data info...
    public function meta()
    {
        return [
            'main_categories' => Maincat::all(),
            'categories' => Mainsubcat::all()
        ];
    }

    //data results...
    protected function data()
    {
        $data = Content::query();
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
