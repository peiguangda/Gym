<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use Response;

class TutorialController extends Controller
{
    

    public function index()
    {
    	return view('tutorial.index');	
    }

    public function create($weight, $age, $height)
    {
    	if ($age <= 40 && $weight >= $height + 9) {
    		$actions = Action::where('lever', 'Nặng')
                                ->get();
    	} elseif ($age > 50) {
    		$actions = Action::where('lever', 'Nhẹ')
                                ->get();
    	} else {
    		$actions = Action::where('lever', 'Trung bình')
                                ->get();
        }   
        // $response = array(
        //     'status' => 'success',
        //     'actions' => $actions,
        // );
    	// return Response::json($response);
        
    }
}
