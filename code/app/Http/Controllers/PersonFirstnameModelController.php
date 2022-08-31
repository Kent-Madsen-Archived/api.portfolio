<?php

namespace App\Http\Controllers;

use App\Models\PersonFirstnameModel;
use App\Http\Requests\StorePersonFirstnameModelRequest;
use App\Http\Requests\UpdatePersonFirstnameModelRequest;

class PersonFirstnameModelController extends Controller
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
     * @param  \App\Http\Requests\StorePersonFirstnameModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonFirstnameModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonFirstnameModel  $personFirstnameModel
     * @return \Illuminate\Http\Response
     */
    public function show(PersonFirstnameModel $personFirstnameModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonFirstnameModelRequest  $request
     * @param  \App\Models\PersonFirstnameModel  $personFirstnameModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonFirstnameModelRequest $request, PersonFirstnameModel $personFirstnameModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonFirstnameModel  $personFirstnameModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonFirstnameModel $personFirstnameModel)
    {
        //
        return null;
    }
}
