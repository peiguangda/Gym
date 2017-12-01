<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;

class RateController extends Controller
{
    public function index()
    {
    	$actions = Action::where('rate',5)->paginate(4);
    	return view('actions.index')->with('actions', $actions);
    }
}
