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

    public function create(Request $request)
    {
        $weight = $request->get('weight');
        $age = $request->get('age');
        $height = $request->get('height');
    	if ($age <= 40 && $weight >= $height + 9) {
            $search =  Action::where('lever', 'Nặng')->paginate(5);
            $search1 = Action::where('lever', 'Nặng')
                                ->get();
        } elseif ($age > 50) {
            $search =  Action::where('lever', 'Nặng')->paginate(5);
            $search1 = Action::where('lever', 'Nhẹ')
                                ->get();
        } else {
            $search =  Action::where('lever', 'Nặng')->paginate(5);
            $search1 = Action::where('lever', 'Trung bình')
                                ->get();
        }
        return view('tutorial.result')->with(['search' => $search,
                                            'search1' => $search1,]);
        
    }
}
