<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Action;
use App\Regester;
use Response;

class RegesterController extends Controller
{
    public function store($userId, $actionId)
    {
        $regesters = Regester::where('id_user', $userId)->get();
        foreach ($regesters as $regester) {
            if ($actionId == $regester->id_action) {
                $response = array('status' => 'fails',);
                return Response::json($response);
            }
        }
        

        Regester::create([
                'id_user' => $userId,
                'id_action' => $actionId,]);

        $response = array('status' => 'success',);
    	return Response::json($response);
    }
}
