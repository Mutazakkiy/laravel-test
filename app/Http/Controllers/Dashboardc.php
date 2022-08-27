<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardc extends Controller
{
    public function index()
    {
        return view('dashboard.home', [
            'title' => 'Dashboard',
        ]);
    }
}
