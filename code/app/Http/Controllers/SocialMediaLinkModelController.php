<?php
    namespace App\Http\Controllers;

    use App\Models\SocialMediaLinkModel;
    use App\Http\Requests\StoreSocialMediaLinkModelRequest;
    use App\Http\Requests\UpdateSocialMediaLinkModelRequest;
    use Illuminate\Http\Response;

    
    class SocialMediaLinkModelController
        extends Controller
    {

        public function index(): ?Response
        {
            //
            return null;
        }


        public function store( StoreSocialMediaLinkModelRequest $request ): ?Response
        {
            //
            return null;
        }


        public function show( SocialMediaLinkModel $socialMediaLinkModel ): ?Response
        {
            //
            return null;
        }


        public function update( UpdateSocialMediaLinkModelRequest $request,
                                SocialMediaLinkModel $socialMediaLinkModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( SocialMediaLinkModel $socialMediaLinkModel ): ?Response
        {
            //
            return null;
        }
    }
?>