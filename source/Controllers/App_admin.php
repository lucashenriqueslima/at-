<?php 

    namespace Source\Controllers;

    class App_admin extends Controller
    {

        public function __construct()
        {

            $this-> template = VIEWPATH."templates/_app_admin.php";

        }

        public function register_admin()
        {
    
            
            
                $title = 'Registrar usuário | AirtonApp';
                $content = 'register_admin';
                require_once $this->template;
            
    
        }


        public function list_admin()
        {
    
            $users = \Source\Models\User::usersTable();
            
            $title = 'Lista de usuários | AirtonApp';
            $content = 'list_admin';
            require_once $this->template;

        }

        public function edit_admin()
        {

            $id = $_GET['id'];



            $user = \Source\Models\User::usersEdit($id);

            if( !is_numeric($id) || empty($user)){
            flash("red", "Favor, não mexer na url :-)");
            redirect("/listar");

            }

            $title = 'Lista de usuários | AirtonApp';
            $content = 'edit_admin';
            require_once $this->template;
        }

        public function logoff_admin()
        {
    
            session_destroy();
            redirect("/administrator");

       
    
        }
    }