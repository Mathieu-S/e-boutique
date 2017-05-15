<?php
function __autoload($class_name) {
    $file = "src/".$class_name.".php";
    if(file_exists($file)) {
        require_once ($file);
    }
}
define("URL", $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].str_replace('index.php', '', $_SERVER['PHP_SELF'] ));
session_start();

global $router;
$router = new Utils\Router($_GET['url']);

$router->get("/",'Default#home');
$router->post("/",'Default#home');
$router->get("/login",'Login#login');
$router->post("/login",'Login#login');
$router->get("/logout",'Login#logout');

$router->get("/register",'Login#register');
$router->post("/register",'Login#register');

$router->get("/product/:id-:slug",'Default#article')
    ->with("id", "[0-9]+")
    ->with("slug", "([A-Za-z0-9]+)");

$router->get("/product/:id",'Default#article')
    ->with("id", "[0-9]+");

$router->get("/panier/ajouter/:id",'Panier#addArticle')
    ->with("id", "[0-9]+");
$router->get("/panier/",'Panier#view');

$router->run();

var_dump($_SESSION);