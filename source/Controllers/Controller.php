<?php 

    namespace Source\Controllers;

    abstract class Controller
    {   

        protected $template;

        public function ajaxResponse( $param = null, array $values = null)
        {
            return json_encode([$param => $values]);
        }

        
    }



    