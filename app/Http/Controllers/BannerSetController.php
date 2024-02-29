<?php

namespace App\Http\Controllers;

use App\Models\BannerSet;
use App\Http\Requests\StoreBannerSetRequest;
use App\Http\Requests\UpdateBannerSetRequest;

class BannerSetController extends Controller
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
     * @param  \App\Http\Requests\StoreBannerSetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerSetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerSet  $bannerSet
     * @return \Illuminate\Http\Response
     */
    public function show(BannerSet $bannerSet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerSet  $bannerSet
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerSet $bannerSet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerSetRequest  $request
     * @param  \App\Models\BannerSet  $bannerSet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerSetRequest $request, BannerSet $bannerSet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerSet  $bannerSet
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerSet $bannerSet)
    {
        //
    }
}
