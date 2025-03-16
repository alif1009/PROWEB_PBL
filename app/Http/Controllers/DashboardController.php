<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard()

    {
        $title = "Dashboard JUALBAKSO";

        return view('dashboard', compact('title'));
    }
}
