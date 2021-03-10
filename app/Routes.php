<?php

//STATIC ROUTES
$router->get('/', 'HomeController:index');

$router->get('/404', 'HomeController:erro404');

/*
EXAMPLES

$router->get('/user/[i:id]', 'HomeController:user');

$router->get('/','view:index.php');

$router->get('/', function(){
	echo 'I am a Function';
});

*/