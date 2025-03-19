<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard()

    {
        $title = "Dashboard PBL Kelompok 2";

        return view('dashboard', compact('title'));
    }
}
