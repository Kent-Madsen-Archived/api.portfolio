<?php

namespace App\Http\Controllers;

use App\Models\ImageModel;
use App\Http\Requests\StoreImageModelRequest;
use App\Http\Requests\UpdateImageModelRequest;
use Illuminate\Http\Response;

class ImageModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): ?Response
    {
        //
        return null;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImageModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageModel  $imageModel
     * @return \Illuminate\Http\Response
     */
    public function show(ImageModel $imageModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageModelRequest  $request
     * @param  \App\Models\ImageModel  $imageModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageModelRequest $request, ImageModel $imageModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageModel  $imageModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageModel $imageModel)
    {
        //
        return null;
    }
}
