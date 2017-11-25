<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    
    public function index()
    {
    	$programs = Program::all();
    	return view('programs.index')->with('programs', $programs);
    }

}
