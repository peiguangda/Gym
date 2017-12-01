<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Program;
use App\Regester;

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
        $regesters = Regester::where('id_user',\Auth::user()->id)
                            ->get();
        $programs = array();
        $actions = array();
        foreach ($regesters as $regester) {
            $action = Action::find($regester->id_action);
            array_push($actions, $action);
        }
        foreach ($actions as $action) {
            $program = Program::find($action->id_program);
            array_push($programs, $program);
        }
        // return dd($actions);
        return view('home.index')->with(['actions'=> $actions,'programs' => $programs]);
    }
}
