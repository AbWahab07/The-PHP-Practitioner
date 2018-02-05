<?php

    /**
     *
     */
    class Router
    {
        protected $routes = [];

        function __construct()
        {
            # code...
        }

        public function define($routes)
        {
            # code...
            $this->routes = $routes;
        }

        public function direct($uri)
        {

            # code...
            if(array_key_exists($uri, $this->routes)){
                //var_dump($this->routes);
                //die(var_dump($uri));
                return $this->routes[$uri];
            }

            throw new \Exception("No route defined for this URL", 1);

        }
    }


 ?>
