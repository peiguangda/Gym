<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    

    public function index()
    {
    	return view('tutorial.index');	
    }

    public function create(Request $request)
    {
    	$weight = $request->get('weight');
    	$age = $request->get('age');
    	$high = $request->get('high');
    	if ($age <= 40 && $weight >= $high + 9) {
    		//todo return route program muc do nang
    		dd('nang');
    	} elseif ($age > 50) {
    		//todo return route program muc do nhe
    		dd('nhe');
    	} else {
    		//todo return route program muc do trung binh
    		dd('trungbinh');
    	} 	
    }
}
