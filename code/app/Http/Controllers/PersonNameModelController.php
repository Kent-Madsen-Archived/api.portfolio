<?php

namespace App\Http\Controllers;

use App\Models\PersonNameModel;
use App\Http\Requests\StorePersonNameModelRequest;
use App\Http\Requests\UpdatePersonNameModelRequest;

class PersonNameModelController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonNameModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonNameModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonNameModel  $personNameModel
     * @return \Illuminate\Http\Response
     */
    public function show(PersonNameModel $personNameModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonNameModelRequest  $request
     * @param  \App\Models\PersonNameModel  $personNameModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonNameModelRequest $request, PersonNameModel $personNameModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonNameModel  $personNameModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonNameModel $personNameModel)
    {
        //
    }
}
