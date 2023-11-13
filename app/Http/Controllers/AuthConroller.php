<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthConroller extends Controller
{
    public function destroy(Request $request)
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/')->with('log-out','xxxxxxxxxxxxx');
        }
}
