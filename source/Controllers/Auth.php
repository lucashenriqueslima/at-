<?php 

    namespace Source\Controllers;

    class Auth extends Controller
    {
        public function login_admin()
        {

   
            $_POST['email'] = strtoupper($_POST['email']);
            
            if(!$_POST['email'] || !$_POST['passwd']){
                echo $this->ajaxResponse("message", [
                    "type" => "yellow darken-3",
                    "message" => "Preencha todos os campos para logar!"
                ]);
                return;
            }

     
            
            $user = \Source\Models\User::login($_POST['email'], $_POST['passwd']);
            $userVerify = count($user);
   
            if($userVerify == 1)
            {
                echo $this->ajaxResponse("redirect", ["url" => SITE."/administrator/me/listar"]);
                $_SESSION["user"] = $user[0]['US_USUARIO'];
                $_SESSION["name"] =  $user[0]['US_NOME'];
                $_SESSION['cpf'] = $user[0]['US_CPF'];

                if(!empty($data["remember"])){
                    setcookie("rememberUser", $_POST['email'], strtotime("+2 month"), "/", "", false, true);
                    }


                flash("blue darken-3", "Sessão iniciada, seja bem-vindo ".ucfirst(strtolower($_SESSION["user"]))." :-)");
                
                return;
                
            }
            
            echo $this->ajaxResponse("message", [
                "type" => "red",
                "message" => "Login ou senha incorreto(s)"
            ]);
          
            return;
        }
    }
        
