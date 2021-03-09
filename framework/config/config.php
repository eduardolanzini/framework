<?php

// ----------------------------------
// |     GENERAL CONFIGURATIONS     |
// ----------------------------------

// true OR false
$config->showErrors(true);

//local OR production
$config->setEnvironment('local');

//www.php.net/manual/pt_BR/timezones.php
$config->setTimezone("America/Sao_Paulo");

// ----------------------------------
// |     LOCAL CONFIGURATIONS       |
// ----------------------------------

$config->setLocalRoot('C:\Users\vitor\Documents\sites\eduardolanzini\framework');
$config->setLocalPath('http://localhost/eduardolanzini/framework/public_html');

// ----------------------------------
// |   PRODUCTION CONFIGURATIONS    |
// ----------------------------------

$config->setProductionRoot("/home/u357803079/domains/automasites.com.br");
$config->setProductionPath("https://automasites.com.br");

// ----------------------------------
// |      DATABASE CONFIGURATIONS       |
// ----------------------------------

$config->useDb = false;

$config->db = [
	'driver' => 'mysql',
	'host' => 'localhost',
	'port' => '3306',
	'charset' => 'charset=utf8;',
	'database' => '',
	'user' => '',
	'pass' => ''
];

$config->productionDB = [
	'driver' => 'mysql',
	'host' => 'localhost',
	'port' => '3306',
	'charset' => '',
	'database' => '',
	'user' => '',
	'pass' => ''
];

// ----------------------------------
// |      USER CONFIGURATIONS       |
// ----------------------------------

$config->setEmail('');