<?php

namespace App\Http\Controllers;

use App\Models\LinkModel;
use App\Http\Requests\StoreLinkModelRequest;
use App\Http\Requests\UpdateLinkModelRequest;

class LinkModelController extends Controller
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
     * @param  \App\Http\Requests\StoreLinkModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLinkModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LinkModel  $linkModel
     * @return \Illuminate\Http\Response
     */
    public function show(LinkModel $linkModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLinkModelRequest  $request
     * @param  \App\Models\LinkModel  $linkModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLinkModelRequest $request, LinkModel $linkModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LinkModel  $linkModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LinkModel $linkModel)
    {
        //
        return null;
    }
}
