<?php
function __autoload($class_name) {
    $file = "src/".$class_name.".php";
    if(file_exists($file)) {
        require_once ($file);
    }
}
define("URL", 'http://localhost/e-boutique/');
session_start();

global $router;
$router = new Utils\Router($_GET['url']);

$router->get("/",'Default#home');
$router->post("/",'Default#home');
$router->get("/login",'Login#login');
$router->post("/login",'Login#login');
$router->get("/product/:id-:slug",'Default#article', 'article')
    ->with("id", "[0-9]+")
    ->with("slug", "([A-Za-z0-9]+)");

$router->run();
