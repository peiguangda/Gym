<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Action;
use App\Program;

class SearchController extends Controller
{
    //
    public function getSearch(Request $req){
        $search = Program::where('trainer','like','%'.$req->key.'%')->paginate(5);
        $search1 = Program::where('trainer','like','%'.$req->key.'%')->get();
                    return view('search.search',compact('search','search1'));
    }
}
