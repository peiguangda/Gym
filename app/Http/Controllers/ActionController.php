<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Regester;

class ActionController extends Controller
{
    
	public function show($id)
	{
		$action = Action::find($id);
		$regester = Regester::where('id_action', $id)
							->where('id_user', \Auth::user()->id)->first();
    	return view('actions.show')->with(['action'=> $action, 'regester' => $regester]);
	}
}
