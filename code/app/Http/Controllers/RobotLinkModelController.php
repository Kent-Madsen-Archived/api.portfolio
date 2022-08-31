<?php
    namespace App\Http\Controllers;

    use App\Models\RobotLinkModel;
    use App\Http\Requests\StoreRobotLinkModelRequest;
    use App\Http\Requests\UpdateRobotLinkModelRequest;
    use Illuminate\Http\Response;


    class RobotLinkModelController
        extends Controller
    {

        public function index(): ?Response
        {
            //
            return null;
        }


        public function store( StoreRobotLinkModelRequest $request ): ?Response
        {
            //
            return null;
        }


        public function show( RobotLinkModel $robotLinkModel ): ?Response
        {
            //
            return null;
        }

        public function update( UpdateRobotLinkModelRequest $request,
                                RobotLinkModel $robotLinkModel ): ?Response
        {
            //
            return null;
        }


        public function destroy( RobotLinkModel $robotLinkModel ): ?Response
        {
            //
            return null;
        }
    }
?>