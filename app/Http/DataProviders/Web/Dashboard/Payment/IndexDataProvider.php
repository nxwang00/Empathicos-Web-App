<?php

namespace App\Http\DataProviders\Web\Dashboard\Payment;

use App\Payment;
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
        $data = Payment::with('user')->orderBy('id', 'desc');
        $data = $this->search($data);

        return $data->paginate(config()->get('constants.PER_PAGE_RECORD'));
    }

    //data search...
    protected function search($object = null)
    {
        if (!empty($this->request->keywords)) {
            $q      = $this->request->keywords;
            $object = $object->where(function ($query) use ($q) {
                $query = $query->where('payer_email', 'LIKE', "%{$q}%")
                    ->orWhere('payment_id', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
