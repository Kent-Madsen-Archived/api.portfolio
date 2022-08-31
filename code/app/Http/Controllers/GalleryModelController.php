<?php
    namespace App\Http\Controllers;

    use App\Models\GalleryModel;
    use App\Http\Requests\StoreGalleryModelRequest;
    use App\Http\Requests\UpdateGalleryModelRequest;
    use Illuminate\Http\Response;


    class GalleryModelController
        extends Controller
    {

        public function index()
        {
            //
            return null;
        }

        public function store( StoreGalleryModelRequest $request ): ?Response
        {
            //
            return null;
        }

        public function show( GalleryModel $galleryModel ): ?Response
        {
            //
            return null;
        }

        public function update( UpdateGalleryModelRequest $request,
                                GalleryModel $galleryModel ): ?Response
        {
            //
            return null;
        }

        public function destroy( GalleryModel $galleryModel ): ?Response
        {
            //
            return null;
        }
    }
?>