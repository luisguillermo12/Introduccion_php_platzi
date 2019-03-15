<?php
/* operadores de comparacion*/

/*operador igual , compara 2 varoables y dice si son iguales*/



$numero = 13;
$numerostring = "13";

echo "hola soy el operador igual == \n"; // revisa solo el valor


var_dump($numero == $numerostring);



/*operador identico*/



echo "hola soy el operador identico === \n";

var_dump($numero === $numerostring);   //revisa que sean del mismo tipo y q tengan el mismo valor 





echo "hola soy el operador diferente != o <> \n"; // revisa el valor q sean diferentes 
var_dump($numero != $numerostring);
var_dump($numero <> $numerostring);



echo "hola soy el operador no identico !==  \n"; // compara valor y tipo 
var_dump($numero !== $numerostring);


/*operador mayor q >  sirve para identificar cual de las 2 variable tiene mayor valor*/
$v1 = 15;
$v2 = 14;

echo "hola soy el operador mayor que >  \n"; // carroja true cuando la primera variable es mayor a la segunda 
var_dump($v1 > $v2);


echo "hola soy el operador menor que  <  \n"; // carroja true cuando la primera variable es menor a la segunda 
var_dump($v1 < $v2);

$v3 = 15;
$v4 = 15;


echo "hola soy el operador mayor o igual que  >=  \n"; // carroja true cuando la primera variable es mayor o igual  a la segunda 
var_dump($v3 >= $v4);

$v5 = 15;
$v6 = 16;


echo "hola soy el operador menor o igual que  <=  \n"; // carroja true cuando la primera variable es menors o igual  a la segunda 
var_dump($v5 >= $v6);


/*operador nuevo o nave espacial*/

echo "hola soy el operador nave espacial  <=>  \n"; // 
var_dump($v5 <=> $v6); // -1 xq la primera es menor a la segunda
var_dump($v6 <=> $v5); // 1 xq la primera es mayor a la segunda
var_dump($v6 <=> $v6); // 0 xq son iguales


/*operador elvis 11:40*/

echo "hola soy el operador elvis ?:  \n"; // 

$resultado = 13 ;
var_dump($resultado ?: 'no hay datos'); // este operador en este caso si la variable tiene true , nos imprime la variable si tiene un valor nullo o algun vacio sera false e imprimira 'no hay datos'


/*operador TERNARIO 11:40*/

echo "hola soy el operador ternario ?:  \n"; // 

$resultado2 = false ;
var_dump($resultado2 ?'soy verdadero':'soy falso'); // este operador en este caso si la variable tiene true , nos imprime soy verdadero , si es false imprime soy falso'


$resultado3 = null;
/*OPERADOR DE FUNCION NULL ?? */
echo "hola soy el operador de funcion null  ??  \n"; // este operador determina si un valor es null si el mismo es null comete una aaccion
var_dump($resultado3 ??' es un valor null');



/* con los operadores elvis , ternario debemos asegurarnos q la variables tenga un dato con el operador  de funcion null no es necesario para verificar q la variable tenga valor lo hacemos con las funcion issset($nombre de la variable )*/

$resultado4;
echo "hola soy el operador elvis verificando variable?:  \n";
var_dump(isset($resultado4) ?: 'no hay datos 210');
var_dump($resultado4 ?: 'no hay datos 220');  // aqui nos da error por que la variable debe contener algun valor 
var_dump(isset($resultado4) ?'soy verdadero':'soy falso211');
var_dump($resultado4 ?'soy verdadero':'soy falso 222'); // aqui nos da error por no verificar q la variable tengfa valor
?>

