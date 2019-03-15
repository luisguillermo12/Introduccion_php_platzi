<?php 

/*E1*/
// con orden de operaciones 

$o1 = 3*2+3;
echo $o1.'<br>';

// con parentesis alterando orden de operaciones
$o2 = 3*(2+3);
echo $o2.'<br>';

/*E2*/
$valor = 10;

if ($valor> 5 and $valor <10){

	echo '$valor es mayor que 5 pero menor que 10 <br>';
} 

if ($valor >= 0 && $valor <= 20){

	echo '	$valor es mayor o igual a 0 pero menor o igual a 20 <br>';
}
if ($valor === '10'){
     echo '$valor es igual a “10” asegurando que el tipo de dato sea cadena';
}
if ($valor >0 && $valor < 5 || $valor >10 and $valor<15){
	echo '$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15';
}
?>