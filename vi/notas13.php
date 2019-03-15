<?php

// OPERADORES DE INCREMENTO

$a = 1;
$b = 1000;


echo ++$a.'<br>'; // antes de mostrar la variable realiza el incremento en 1 de la misma 
echo $a.'<br>';

// a vale dos con el pre incremento

echo $b++. '<br>';  // despues de mostrar la variable en la siguiente line a es q la variable toma el nuevo valor incrementado en uno 
echo $b. '<br>';

// mezclar ++ y + produce un comportamiento indefinido
$h = 1;
echo ++$h + $h++; // puede mostrar 4 o 5

// ORDEN DE OPERADORES 

/*

Antes de continuar hablando de operadores es importante mencionar que existe un concepto conocido como precedencia de operadores el cual nos permitirá saber en qué orden se deben ejecutar los operadores que se encuentren en una sola sentencia.

Por ejemplo, en la sentencia:

1 + 2 * 3

Se ejecutará primero la operación 2 * 3
Luego se ejecutará la suma con 1

Esto es debido a que * tiene más valor en la precedencia que el +

*/

$c = 1 + 2 * 3;

echo '<br>'.$c.'<br>';


/*

Una forma sencilla de controlar la precedencia es utilizando () paréntesis, de esta forma podemos forzar el orden que nosotros queramos, por ejemplo (1 + 2) * 3 será una versión diferente y se ejecutará primero la suma y luego la multiplicación.

Te dejo el enlace por si quieres consultar más información al respecto. http://php.net/manual/es/language.operators.precedence.php



*/



$d =  (1 + 2) * 3;
echo $d.'<br>';



/*
operador identidad realizan una conversion a tipo entero
operador de negacion convierte en negativo un valor numerico lo niega

+$a	Identidad	Conversión de $a a int o float según el caso.
-$a	Negación	Opuesto de $a.

*nota = ninguno de estos valores realiza una conversion de tipos si existe un caracter q no sea numerico delante o solo caracter 
no covierten nada y dan un error 

 si el caracter esta detras y toma el primer valor como numerico


*/


$e = '1';
echo' antes de identidad <br>';
var_dump($e);
echo'<br>';
$e = +$e;
echo' despues de identidad <br>';
var_dump($e); 
echo'<br>';	

$f = '-1';
echo' antes de negacion <br>';
var_dump($f);
echo'<br>';
$f = -$f;
echo' despues de negacion <br>';
var_dump($f); 
echo'<br>';	


/*operadores aritmeticos*/
/*suma */
$a = 5 ;
$b = 8; 

$suma = $a+$b;
echo $suma;

/* rsta */
$resta = $a-$b;
echo $resta ;


/*multiplicacion */

$multiplica = $a*$b ;
echo $multiplica;

/*oparador division */

$division  = $a/$b;
echo $division;

/*operador modulo  modulo =dividendo-(divisor * cociente)  */

$residuo = $a-($b*intval($division));
$modulo = $a%$b;

echo "a pie $residuo a pie ";
echo "$ a modulo $modulo modulo ";

/* exponenciacion */

$h = 3;
$i = 2;

$exponenciacion = $h**$i;
echo "exponenciacion $exponenciacion <br>";




/*OPERADORES DE ASIGNACION 
Operadores de asignación
http://php.net/manual/es/language.operators.assignment.php

El operador principal de asignación es el símbolo = (igual). Es importante tener en cuenta que este operador no sirve para comparar, normalmente del lado izquierdo del operador tendremos una variable, y este operador sirve para asignar el resultado de lo que se encuentre a la derecha a dicha variable.

$variable = 5;

Lo que tenemos en la derecha puede ser un valor, otra variable, o el resultado de una operación o función.



También existen otros operadores de asignación que se combinan con operadores aritméticos o para strings y nos permiten simplificar algunas sentencias dentro de PHP. Estos son ejemplos de cómo funcionan:

$a += $b
$a = $a + $b

$a -= $b
$a = $a - $b

$a *= $b
$a = $a * $b

$a /= $b
$a = $a / $b

$a %= $b
$a = $a % $b

$a .= $b
$a = $a . $b


Operadores lógicos ¶
Operadores lógicos

http://php.net/manual/es/language.operators.logical.php  


Ejemplo	Nombre	Resultado
$a and $b	And (y)	TRUE si tanto $a como $b son TRUE.
$a or $b	Or (o inclusivo)	TRUE si cualquiera de $a o $b es TRUE.
$a xor $b	Xor (o exclusivo)	TRUE si $a o $b es TRUE, pero no ambos.
! $a	Not (no)	TRUE si $a no es TRUE.
$a && $b	And (y)	TRUE si tanto $a como $b son TRUE.
$a || $b	Or (o inclusivo)	TRUE si cualquiera de $a o $b es TRUE.






Operadores para strings
Existen 2 operadores para strings el . (punto) que nos permite concatenar cadenas, y el .= que ya fue visto anteriormente y nos permite simplificar la sintaxis de concatenar algo a una misma cadena, ejemplo:

$var1 = ‘Hola ’ . ‘ php’;
$var1 .= ‘!!!’;
echo $var1;
imprime

Hola php!!!



OPERADORES DE ARRAYS 

http://php.net/manual/es/language.operators.array.php

Operadores para arrays
Ejemplo	Nombre	Resultado
$a + $b	Unión	Unión de $a y $b.
$a == $b	Igualdad	TRUE si $a i $b tienen las mismas parejas clave/valor.
$a === $b	Identidad	TRUE si $a y $b tienen las mismas parejas clave/valor en el mismo orden y de los mismos tipos.
$a != $b	Desigualdad	TRUE si $a no es igual a $b.
$a <> $b	Desigualdad	TRUE si $a no es igual a $b.
$a !== $b	No-identidad	TRUE si $a no es idéntica a $b.




*/


$array1 = [1,2,3];
$array2 = [3,4,5,6];

$arraytotal = $array1+$array2; // une , y aquellas llaves o key q sean iguales , coloca las del primer arreglo

var_dump($arraytotal);



