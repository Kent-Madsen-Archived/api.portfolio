<?php
    namespace App\Http\Controllers;

    use App\Models\PersonSurnameModel;
    use App\Http\Requests\StorePersonSurnameModelRequest;
    use App\Http\Requests\UpdatePersonSurnameModelRequest;
    use Illuminate\Http\Response;


    class PersonSurnameModelController
        extends Controller
    {

        public function index(): ?Response
        {
            //
            return null;
        }

        public function store( StorePersonSurnameModelRequest $request ): ?Response
        {
            //
            return null;
        }

        public function show( PersonSurnameModel $personSurnameModel ): ?Response
        {
            //
            return null;
        }


        public function update( UpdatePersonSurnameModelRequest $request,
                                PersonSurnameModel $personSurnameModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( PersonSurnameModel $personSurnameModel ): ?Response
        {
            //
            return null;
        }
    }
?>