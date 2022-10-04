<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $phones = Phone::all();
    return response()->json([
        'phones' => $phones
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(['$']);

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
        'phone_id' => 'required',
        'title'  => 'required',
    ]);
    if ($validator->fails()) {
        return response()->json(['status' => 422, 'errors' => $validator->errors()]);
    }
    else {

        Phone::create([
            'phone_id' => $request->input('phone_id'),
            'title' => $request->input('title'),
        ]);
    }
    return response()->json(['req' => $request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {

        $phone->update($request->all());
    return response()->json([
        'message' => "Phone updated successfully!",
        'product' => $phone
    ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        return response()->json([
        'message' => "Phone deleted successfully!",
    ], 200);
    }
}
