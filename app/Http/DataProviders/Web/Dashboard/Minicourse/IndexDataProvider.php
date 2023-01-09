<?php

namespace App\Http\DataProviders\Web\Dashboard\Minicourse;

use App\MiniCourse;
use App\Mainsubcat;
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
            ->addColumn('title', function ($course) {
                return $course->title;
            })
             ->addColumn('image', function ($course) {
                return $course->image;
            })
            ->addColumn('description', function ($course) {
                return $course->description;
            })
             ->addColumn('category', function ($course) {
                return Mainsubcat::where('id', $course->category_id)->pluck('title')->implode('');
            })
            ->addColumn('action', function ($course) {
                $btn = viewButton('admin.mini-courses', $course);
                $btn .= editButton('admin.mini-courses', $course);
                $btn .= trashButton('admin.mini-courses', $course);
                return $btn;
            })
            ->rawColumns(['title','description','category','image','action'])
            ->make(true);
    }

    //meta data info...
    public function meta()
    {
        return [
            'categories' => Mainsubcat::where('is_mini_course', 1)->get()
        ];
    }

    //data results...
    protected function data()
    {
        $data = MiniCourse::query();
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
