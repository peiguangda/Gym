<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    
    public function index()
    {
    	$programs = Program::paginate(4);
    	return view('programs.index')->with('programs', $programs);
    }

}
