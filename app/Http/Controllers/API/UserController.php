<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
     public function index(){
         $users = User::paginate(10);
    	return response()->json($users);
    }
    public function store(Request $request){
        return response()->json(['']);

    }
    public function show (){

    }
    public function destroy (){
         return response()->json([
        'message' => "Phone deleted successfully!",
    ], 200);

    }


}
