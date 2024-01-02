<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function pemain()
    {
        return view('dashboard.pemain');
    }
    public function rekammedis()
    {
        return view('dashboard.rekammedis');
    }
    public function rumahsakit()
    {
        return view('dashboard.rumahsakit');
    }
}
