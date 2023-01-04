<?php

namespace App\Http\DataProviders\Web\Dashboard\User;

use App\User;
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
            ->addColumn('status', function ($user) {
                return statusButton('admin.users', $user);
            })
            ->addColumn('role', function ($user) {
                $role = ($user->role == '1') ? 'User' : 'Admin';
                return $role;
            })
            ->addColumn('name', function ($user) {
                return ucwords($user->name);
            })
            ->addColumn('about', function ($user) {
                return Str::words($user->about, '30');
            })
            ->addColumn('action', function ($user) {
                $btn = viewButton('admin.users', $user);
                $btn .= editButton('admin.users', $user);
                $btn .= trashButton('admin.users', $user);
                return $btn;
            })
            ->rawColumns(['name', 'status', 'action', 'role', 'about'])
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
        $data = User::query();
        $data = $this->search($data);
        $data = $this->filter($data);

        return $data;
    }

    //data filter...
    protected function filter($object = null)
    {
        if (!empty($this->request->status) && $this->request->status != 'all') {
            $status = ($this->request->status == 'active') ? '1' : '0';
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
                $query = $query->where('name', 'LIKE', "%{$q}%")
                    ->orWhere('email', 'LIKE', "%{$q}%");
            });
        }
        return $object;
    }
}
