<?php

namespace App\Http\Controllers;

use App\Models\RobotLinkModel;
use App\Http\Requests\StoreRobotLinkModelRequest;
use App\Http\Requests\UpdateRobotLinkModelRequest;

class RobotLinkModelController extends Controller
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
     * @param  \App\Http\Requests\StoreRobotLinkModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRobotLinkModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RobotLinkModel  $robotLinkModel
     * @return \Illuminate\Http\Response
     */
    public function show(RobotLinkModel $robotLinkModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRobotLinkModelRequest  $request
     * @param  \App\Models\RobotLinkModel  $robotLinkModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRobotLinkModelRequest $request, RobotLinkModel $robotLinkModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RobotLinkModel  $robotLinkModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RobotLinkModel $robotLinkModel)
    {
        //
        return null;
    }
}
