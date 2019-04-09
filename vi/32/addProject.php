<?php

/*
para eviar inforamcion al servidor debemos colocar name a los campos 
si no colocamos metodo en el formulario se deberia ir por el metodo get 
 */
require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Project;


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

if (!empty($_POST)){ 
        $proj = new Project();
        $proj->name = $_POST['name'];
        $proj->description = $_POST['description'];
        $proj->save();
}

//var_dump($_GET);
//var_dump($_POST);
?>
<html>
    <head>
        <title>Add Proyect</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
            crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Add Proyect</h1>
        <form action="addProject.php" method="post" >
            <label for="">name:</label>
            <input type="text" name="name" ><br>
            <label for="">Description:</label>
            <input type="text" name="description"><br>
            <button type="submit">Save</button>
        </form>
    </body>
</html>