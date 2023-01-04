<?php

namespace App\Http\DataProviders\Web\Dashboard\Faq;

use App\Faq;
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
            ->addColumn('status', function ($faq) {
                return statusButton('admin.faqs', $faq);
            })
            ->addColumn('question', function ($faq) {
                return ucfirst(Str::words($faq->question, '10'));
            })
            ->addColumn('anwser', function ($faq) {
                return Str::words($faq->anwser, '30');
            })
            ->addColumn('action', function ($faq) {
                $btn = viewButton('admin.faqs', $faq);
                $btn .= editButton('admin.faqs', $faq);
                $btn .= trashButton('admin.faqs', $faq);
                return $btn;
            })
            ->rawColumns(['title', 'status', 'question', 'anwser', 'action'])
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
        $data = faq::query();
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
                $query = $query->where('question', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
