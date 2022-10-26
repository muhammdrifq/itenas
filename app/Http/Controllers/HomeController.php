<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('dosen')) {
            return redirect('dosen');
        }
        elseif ($request->user()->hasRole('koordinator')){
            return redirect('koordinator');
        }

        elseif ($request->user()->hasRole('mahasiswa')){
            return redirect('mahasiswa');
        }
        else {
            // return redirect('mahasiswa');
        }
        // return view('home');
    }
}
