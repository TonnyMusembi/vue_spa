<?php

namespace App\Http\Controllers;

use App\Models\Profits;
use Illuminate\Http\Request;

class ProfitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

return view('profits');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profits  $profits
     * @return \Illuminate\Http\Response
     */
    public function show(Profits $profits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profits  $profits
     * @return \Illuminate\Http\Response
     */
    public function edit(Profits $profits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profits  $profits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profits $profits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profits  $profits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profits $profits)
    {
        //
    }
}
