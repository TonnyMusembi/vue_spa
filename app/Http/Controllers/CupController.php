<?php

namespace App\Http\Controllers;

use App\Models\Cup;
use Illuminate\Http\Request;

class CupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cups = Cup::latest()->paginate(10);
        return response()->json([
            "status" => 200,
            "data" => $cups
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
     return response()->json([
        'message'=> 'created successfully',
        'status' => 'success'

     ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cup_id' => 'required',
            'name' => 'required',
            'country'=> 'required'
        ]);
        $cup = Cup::create($request->all());
        return [
            "status" => 200,
            "data" => $cup
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cup  $cups
     * @return \Illuminate\Http\Response
     */
    public function show(Cup $cup)
    {
    return  response()->json();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function edit(Cup $cup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cup $cup)
    {
    return  response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cup  $cuo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cup $cup)
    {
        return response()->json([
        'message' => "Cup deleted successfully!",
        "data" => $cup
    ], 200);
    }
}
