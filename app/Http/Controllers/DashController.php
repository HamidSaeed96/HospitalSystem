<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashController extends Controller
{
    //
    public function index()
    {
        # code...
        if(Auth::user()->hasRole('doctor'))
        {
            return view('doc_dash');
        }
        elseif(Auth::user()->hasRole('student'))
        {
            return view('stud_dash');
        }
        elseif(Auth::user()->hasRole('patient'))
        {
            return view('pat_dash');
        }
        // elseif(Auth::user()->hasRole('admin'))
        // {
        //     return view('admin_dash');
        // }
    }
    public function logout()
    {
    # code...
        Auth::logout();
        return redirect('/login');
    }
}
