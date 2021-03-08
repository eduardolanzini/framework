<?php

//STATIC ROUTES
$router->get('/', 'HomeController:index');
$router->get('/construcao-de-sites', 'HomeController:websites');
$router->get('/lojas-virtuais', 'HomeController:lojas_virtuais');
$router->get('/componentes', 'HomeController:componentes');

//$router->get('/v3', 'HomeController:v3');

//$router->get('/login', 'view:login.php');
$router->get('/404', 'HomeController:erro404');

/*
EXAMPLES

$router->get('/','index@HomeController');

$router->get('/user/[i:id]', 'HomeController:user');

$router->get('/','view:index.php');

$router->get('/', function(){
	echo 'I am a Function';
});

*/