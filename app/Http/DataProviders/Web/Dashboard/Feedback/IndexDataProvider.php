<?php

namespace App\Http\DataProviders\Web\Dashboard\Feedback;

use App\Feedback;
use Illuminate\Http\Request;

class IndexDataProvider
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    //meta data info...
    public function meta()
    {
        return [
            'results' => $this->data(),
        ];
    }

    //data results...
    protected function data()
    {
        $data = Feedback::with('user')->orderBy('id','desc');
        $data = $this->search($data);
        $data = $this->filter($data);

        return $data->paginate(config()->get('constants.PER_PAGE_RECORD'));
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
