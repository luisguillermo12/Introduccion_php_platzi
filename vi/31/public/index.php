<?php
ini_set ('display_errors', 1 ); // inicializa variables de php estas variables muestran los errores de php
ini_set('display_starup_error' , 1);
error_reporting('E_All');



require_once '../vendor/autoload.php';


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

$route = $_GET['route'] ?? '/';

if ($route== '/'){
require ('../index2.php');

}elseif ($route == 'addJob'){
	require ('../addJob.php');
}

?>