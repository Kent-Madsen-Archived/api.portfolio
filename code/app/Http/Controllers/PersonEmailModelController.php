<?php
    namespace App\Http\Controllers;

    use App\Models\PersonEmailModel;
    use App\Http\Requests\StorePersonEmailModelRequest;
    use App\Http\Requests\UpdatePersonEmailModelRequest;use Illuminate\Http\Response;


    class PersonEmailModelController
        extends Controller
    {
        
        public function index(): ?Response
        {
            //
            return null;
        }


        public function store( StorePersonEmailModelRequest $request ): ?Response
        {
            //
            return null;
        }


        public function show( PersonEmailModel $personEmailModel ): ?Response
        {
            //
            return null;
        }


        public function update( UpdatePersonEmailModelRequest $request,
                                PersonEmailModel $personEmailModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( PersonEmailModel $personEmailModel ): ?Response
        {
            //
            return null;
        }
    }
?>