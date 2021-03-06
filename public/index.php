<?php

/*.htaccess archivo de apace q permite redireccionamiento y otros atributos*/

/*psr7 =  */
ini_set ('display_errors', 1 ); // inicializa variables de php estas variables muestran los errores de php
ini_set('display_starup_error' , 1);
error_reporting('E_All');



require_once '../vendor/autoload.php';

use Aura\Router\RouterContainer;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal(); // nos permite hacer todo como ene l constesto global 

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent(); // inicializar el orm


$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();


$map->get('index', '/', '../index.php');
$map->get('addJob', '/jobs/add', '../addJob.php');

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

if (!$route){
	echo 'no route';
}else{
    require $route->handler;
}

//var_dump($route->handler);

//var_dump($route);

?>