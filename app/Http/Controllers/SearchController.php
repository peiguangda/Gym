<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;

class SearchController extends Controller
{
    //
    public function getSearch(Request $req){
        $search = Action::where('trainer','like','%'.$req->key.'%')->paginate(5);
        $search1 = Action::where('trainer','like','%'.$req->key.'%')->get();
                    return view('search.search',compact('search','search1'));
    }
}
