<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }//End Method


    public function AdminLogin()
    {
        return view('admin.login');
    }//End method
}
