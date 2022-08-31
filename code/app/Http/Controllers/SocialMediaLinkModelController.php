<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaLinkModel;
use App\Http\Requests\StoreSocialMediaLinkModelRequest;
use App\Http\Requests\UpdateSocialMediaLinkModelRequest;

class SocialMediaLinkModelController extends Controller
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
     * @param  \App\Http\Requests\StoreSocialMediaLinkModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialMediaLinkModelRequest $request)
    {
        //
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMediaLinkModel  $socialMediaLinkModel
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMediaLinkModel $socialMediaLinkModel)
    {
        //
        return null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialMediaLinkModelRequest  $request
     * @param  \App\Models\SocialMediaLinkModel  $socialMediaLinkModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialMediaLinkModelRequest $request, SocialMediaLinkModel $socialMediaLinkModel)
    {
        //
        return null;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMediaLinkModel  $socialMediaLinkModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMediaLinkModel $socialMediaLinkModel)
    {
        //
        return null;
    }
}
