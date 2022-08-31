<?php

namespace App\Http\Controllers;

use App\Models\GalleryModel;
use App\Http\Requests\StoreGalleryModelRequest;
use App\Http\Requests\UpdateGalleryModelRequest;

class GalleryModelController extends Controller
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
     * @param  \App\Http\Requests\StoreGalleryModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryModel $galleryModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryModelRequest  $request
     * @param  \App\Models\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryModelRequest $request, GalleryModel $galleryModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryModel  $galleryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryModel $galleryModel)
    {
        //
        return null;
    }
}
