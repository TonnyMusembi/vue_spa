<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{

    public function index(){

    return view('qrcode');


    }
    public function store(Request $request){
        return response()->json();

    }
    public function create(){
        return  response()->json([]);

    }
   public function destroy($id){
    return response()->json([
        'message' => "successfully deleted"
    ]);

   }
}
