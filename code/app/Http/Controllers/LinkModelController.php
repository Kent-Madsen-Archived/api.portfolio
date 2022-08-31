<?php
    namespace App\Http\Controllers;

    use App\Models\LinkModel;
    use App\Http\Requests\StoreLinkModelRequest;
    use App\Http\Requests\UpdateLinkModelRequest;
    use Illuminate\Http\Response;


    class LinkModelController
        extends Controller
    {
        public function index(): ?Response
        {
            //
            return null;
        }

        public function store( StoreLinkModelRequest $request ): ?Response
        {
            //
            return null;
        }


        public function show( LinkModel $linkModel ): ?Response
        {
            //
            return null;
        }


        public function update( UpdateLinkModelRequest $request,
                                LinkModel $linkModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( LinkModel $linkModel ): ?Response
        {
            //
            return null;
        }
    }
?>