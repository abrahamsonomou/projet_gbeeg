<?php

namespace App\Http\Controllers;

use App\Models\NewLetter;
use App\Http\Requests\StoreNewLetterRequest;
use App\Http\Requests\UpdateNewLetterRequest;

class NewLetterController extends Controller
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
     * @param  \App\Http\Requests\StoreNewLetterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewLetterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewLetter  $newLetter
     * @return \Illuminate\Http\Response
     */
    public function show(NewLetter $newLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewLetter  $newLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(NewLetter $newLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewLetterRequest  $request
     * @param  \App\Models\NewLetter  $newLetter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewLetterRequest $request, NewLetter $newLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewLetter  $newLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewLetter $newLetter)
    {
        //
    }
}
