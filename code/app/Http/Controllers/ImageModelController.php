<?php
    namespace App\Http\Controllers;

    use App\Models\ImageModel;
    use App\Http\Requests\StoreImageModelRequest;
    use App\Http\Requests\UpdateImageModelRequest;
    use Illuminate\Http\Response;


    class ImageModelController
        extends Controller
    {
        public function index(): ?Response
        {
            //
            return null;
        }

        public function store( StoreImageModelRequest $request ): ?Response
        {
            //
            return null;
        }

        public function show( ImageModel $imageModel ): ?Response
        {
            //
            return null;
        }

        public function update( UpdateImageModelRequest $request,
                                ImageModel $imageModel ): ?Response
        {
            //
            return null;
        }

        public function destroy( ImageModel $imageModel ): ?Response
        {
            //
            return null;
        }
    }
?>