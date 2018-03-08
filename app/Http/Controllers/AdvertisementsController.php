<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::all();
        return view('advertisement.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new Advertisement();
        $ad->description = $request->description;
        $ad->amount = $request->amount;
        $ad->quality = $request->quality;
        $ad->deliveryDate = $request->deliveryDate;
        $ad->user_id = $request->session()->get('loggedInUser')->id;
        $ad->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Advertisement  $adverstisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $adverstisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Advertisement  $adverstisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $adverstisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Advertisement  $adverstisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $adverstisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Advertisement  $adverstisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $adverstisement)
    {
        //
    }
}
