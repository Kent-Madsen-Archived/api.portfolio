<?php
    namespace App\Http\Controllers;

    use App\Models\PersonNameModel;
    use App\Http\Requests\StorePersonNameModelRequest;
    use App\Http\Requests\UpdatePersonNameModelRequest;
    use Illuminate\Http\Response;


    class PersonNameModelController
        extends Controller
    {

        public function index(): ?Response
        {
            //
            return null;
        }


        public function store( StorePersonNameModelRequest $request ): ?Response
        {
            //
            return null;
        }


        public function show( PersonNameModel $personNameModel ): ?Response
        {
            //
            return null;
        }


        public function update( UpdatePersonNameModelRequest $request,
                                PersonNameModel $personNameModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( PersonNameModel $personNameModel ): ?Response
        {
            //
            return null;
        }
    }
?>