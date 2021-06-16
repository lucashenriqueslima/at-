<?php

    namespace Source;

    class Router
    {   

        private $handlers = array();
        private $notFound;
        const  METHOD_POST = 'POST';
        const METHOD_GET = 'GET';

        public function get($path, $handler)
        {   


            $path = "/airtonapp".$path;
            $this->addHandler(self::METHOD_GET, $path, $handler);
        }

        public function post($path, $handler)
        {
            $path = "/airtonapp".$path;
            $this->addHandler(self::METHOD_POST, $path, $handler);
        }

        private function addHandler($method, $path, $handler)
        {
            $this->handlers[$method . $path] = [
                'path' => $path,
                'method' => $method,
                'handler' => $handler
            ];

        }

        public function notFound($handler)
        {
            $this->notFound = $handler; 
        }

        public function run()
        {   

            $requestUri = parse_url($_SERVER["REQUEST_URI"]);
            $requestPath =  $requestUri['path'];

            $method = $_SERVER['REQUEST_METHOD'];

            $callback = null;

            foreach($this->handlers as $handler)
            {
                if($handler['path'] === $requestPath && $method === $handler['method']){
                    $callback = $handler['handler'];
                }
            }



            if(is_string($callback)){

                $parts = explode('::', $callback);
                if(is_array($parts)){
                    $className = array_shift($parts);
                    $handler = new $className;

                    $method = array_shift($parts);
                    $callback = [$handler, $method];
                }
            }

            if(!$callback){
                header("HTTP/1.0 404 Not Found");
                if(!empty($this->notFound)){
                    $callback = $this->notFound;
                }
            }
            call_user_func_array($callback, [
                array_merge($_GET, $_POST)
            ]);
        }
    }