<?php 
session_start();
ob_start();
require __DIR__."/vendor/autoload.php";

define("VIEWPATH", __DIR__."/views/themes/");

use Source\Controllers\Auth;
use Source\Router;
use Source\Controllers\Web_admin;
use Source\Controllers\App_admin;

$router = new Router;

$router->get('/administrator', Web_admin::class . "::login_admin");
$router->get('/administrator/me/registrar', App_admin::class . "::register_admin");
$router->get('/administrator/me/listar', App_admin::class . "::list_admin");
$router->get('/administrator/me/listar/editar', App_admin::class . "::edit_admin");
$router->get('/administrator/me/sair', App_admin::class . "::logoff_admin");

$router->post('/authentication/login', Auth::class . "::login_admin");


$router->notFound(function(){
    $title = "TITULO";
    require_once VIEWPATH."404.php";  
});

$router->run();
