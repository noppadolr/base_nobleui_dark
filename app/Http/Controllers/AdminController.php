<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::query()->findOrFail($id);
        dd($adminData);

    }
}
