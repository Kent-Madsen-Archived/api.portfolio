<?php
    namespace routes;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;


    /**
      *
      */
    class BaseRoute
    {
        /**
          * @param string|null $value
          */
        function __construct( ?string $value = null )
        {
            $this->setRoute( $value );
        }

        // Variables
        private $route;


        // Accessors
        public final function getRoute(): ?string
        {
            return $this->route;
        }

        public final function setRoute( ?string $value ): ?string
        {
            $this->route = $value;
            return $this->route;
        }

        //
        public const c = BaseRoute::create;
        public const create = 'create';

        public const r = BaseRoute::retrieve;
        public const retrieve = 'retrieve';

        public const u = BaseRoute::update;
        public const update = 'update';

        public const d = BaseRoute::delete;
        public const delete = 'delete';
    }
?>