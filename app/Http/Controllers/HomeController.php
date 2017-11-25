<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::where('id_user',\Auth::user()->id)
                            ->get();
        // return dd($programs);
        return view('home.index')->with('programs', $programs);
    }
}
