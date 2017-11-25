<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    

    public function index()
    {
    	return view('tutorial.index');	
    }

    public function create($weight, $age, $height)
    {
    	if ($age <= 40 && $weight >= $height + 9) {
    		//todo return route program muc do nang
    		return "nang";
    	} elseif ($age > 50) {
    		//todo return route program muc do nhe
    		return 'nhe';
    	} else {
    		//todo return route program muc do trung binh
    		return 'trungbinh';
    	} 	
    }
}
