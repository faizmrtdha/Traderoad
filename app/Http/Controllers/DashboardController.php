<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // dd('telah login');
        return view('dashboard.index');
    }
}
