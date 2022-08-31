<?php

namespace App\Http\Controllers;

use App\Models\PersonEmailModel;
use App\Http\Requests\StorePersonEmailModelRequest;
use App\Http\Requests\UpdatePersonEmailModelRequest;

class PersonEmailModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonEmailModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonEmailModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonEmailModel  $personEmailModel
     * @return \Illuminate\Http\Response
     */
    public function show(PersonEmailModel $personEmailModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonEmailModelRequest  $request
     * @param  \App\Models\PersonEmailModel  $personEmailModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonEmailModelRequest $request, PersonEmailModel $personEmailModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonEmailModel  $personEmailModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonEmailModel $personEmailModel)
    {
        //
        return null;
    }
}
