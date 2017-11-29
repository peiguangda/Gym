<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
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
        $actions = Action::where('id_user',\Auth::user()->id)
                            ->get();
        $programs = array();
        foreach ($actions as $action) {
            $program = Program::find($action->id_program);
            array_push($programs, $program);
        }
        return view('home.index')->with(['actions'=> $actions,'programs' => $programs]);
    }
}
