<?php
    namespace App\Http\Controllers;

    use App\Models\PersonFirstnameModel;
    use App\Http\Requests\StorePersonFirstnameModelRequest;
    use App\Http\Requests\UpdatePersonFirstnameModelRequest;use Illuminate\Http\Response;


    class PersonFirstnameModelController
        extends Controller
    {

        public function index(): ?Response
        {
            //
            return null;
        }


        public function store( StorePersonFirstnameModelRequest $request ): ?Response
        {
            //
            return null;
        }


        public function show( PersonFirstnameModel $personFirstnameModel ): ?Response
        {
            //
            return null;
        }


        public function update( UpdatePersonFirstnameModelRequest $request,
                                PersonFirstnameModel $personFirstnameModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( PersonFirstnameModel $personFirstnameModel ): ?Response
        {
            //
            return null;
        }
    }
?>