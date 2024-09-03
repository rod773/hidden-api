<?php


require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();


$router->get("/",function(){
    echo "<h2>Hidden Api</h2>";
});

$router->get("auth/login",function(){

    include "./src/auth/login.php";

    exit;

});



// Run it!
$router->run();