<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function ManagerDashboard()
    {
        return view('manager.dashboard');
    }//end method
}
