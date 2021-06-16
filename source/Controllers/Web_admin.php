<?php

    namespace Source\Controllers;

    class Web_admin extends Controller
    {
        public function __construct()
        {

            $this-> template = VIEWPATH."templates/_login_admin.php";

        }

        public function login_admin()
        {

            $title = 'Bem-vindo | AirtonApp';
            $content = 'login_admin';
            require_once $this->template;
        }

    }