<?php
/* lenguajes devilmente tipado , tipado dinamico , esxisten caracteristicas q nos pueden ayudar a realizar un codigo tipeado

cualquier clase q implemente esta interface debe tener un metodo getDescription , eso es lo que estamos diciendo aqui 


*/
namespace App\models;
interface Printable { 

	public function getDescription();

}