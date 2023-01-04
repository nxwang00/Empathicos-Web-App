<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
    }
}
