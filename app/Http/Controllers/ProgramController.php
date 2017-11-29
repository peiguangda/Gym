<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Action;

class ProgramController extends Controller
{
    
    public function index()
    {
    	$programs = Program::paginate(4);
    	return view('programs.index')->with('programs', $programs);
    }

    public function show($id)
    {
    	$actions = Action::where('id_program',$id)->paginate(4);
    	return view('programs.show')->with('actions', $actions);
    }
    
}
