<?php

namespace App\Http\Controllers;

use App\Models\PersonSurnameModel;
use App\Http\Requests\StorePersonSurnameModelRequest;
use App\Http\Requests\UpdatePersonSurnameModelRequest;

class PersonSurnameModelController extends Controller
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
     * @param  \App\Http\Requests\StorePersonSurnameModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonSurnameModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonSurnameModel  $personSurnameModel
     * @return \Illuminate\Http\Response
     */
    public function show(PersonSurnameModel $personSurnameModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonSurnameModelRequest  $request
     * @param  \App\Models\PersonSurnameModel  $personSurnameModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonSurnameModelRequest $request, PersonSurnameModel $personSurnameModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonSurnameModel  $personSurnameModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonSurnameModel $personSurnameModel)
    {
        //
    }
}
