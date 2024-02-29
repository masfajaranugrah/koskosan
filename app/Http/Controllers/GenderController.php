<?php

namespace App\Http\Controllers;

use App\Models\gender;
use App\Http\Requests\StoregenderRequest;
use App\Http\Requests\UpdategenderRequest;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoregenderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregenderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit(gender $gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategenderRequest  $request
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategenderRequest $request, gender $gender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(gender $gender)
    {
        //
    }
}
