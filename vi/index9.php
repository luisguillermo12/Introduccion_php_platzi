<?php 

$arreglo = [

   'keyStr1' => 'lado',
   0 => 'ledo',

   'keyStr2' => 'lido',
   1 => 'lodo',
   2 => 'ludo'

];

echo $arreglo['keyStr1'] . ',' . $arreglo[0] . ',' . $arreglo['keyStr2'] . ',' . $arreglo[1] .','. $arreglo[2]. '<br>';
echo 'decirlo al revés lo dudo.'. '<br>';
echo "$arreglo[2] , $arreglo[1] , $arreglo[keyStr2] , $arreglo[0] , $arreglo[keyStr1] <br>" ;
foreach (array_reverse($arreglo) as $value) {
   echo $value.',';
}
echo '<br>';
echo '¡Qué trabajo me ha costado! <br>';


$paises = [
   'Colombia'  =>['Bogota','Cartagena', 'Medellin'] ,
   'Mexico'    =>['Monterrey', 'Querétaro', 'Guadalajara'] ,
   'Venezuela' =>['Caracas', 'Maracay', 'Valencia'],
    'EEUU'     =>['Miami', 'Los angeles', 'New York'],
    'Argentina'=>['Buenos Aires', 'Ciudad de Còrdoba', 'Salta']
 ];

foreach ($paises as $pais => $ciudades) {
   echo "$pais tiene como como ciudades a <br>";
   foreach ($ciudades as $ciudad) {
      echo $ciudad. '<br>';
   }
}

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
$valores2 = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

//ordenar array manualmente
for($i=0;$i<count($valores);$i++)
   {
      for($j=$i+1;$j<count($valores);$j++)
      {
         if($valores[$j]<$valores[$i])
         {
            $tmp=$valores[$i];
            $valores[$i]=$valores[$j];
            $valores[$j]=$tmp;
         }
      }
   }


foreach ($valores as $value) {
   echo $value. '<br>';
}

// ordenar array con funciones 

 asort($valores2); //funciones de ordenamiento ambas
 sort($valores2);

foreach ($valores2 as $value) {
   echo $value. '<br>';
}

echo 'valores mas bajos';
for ($i=0; $i <3 ; $i++) { 
   echo $valores[$i].',';
}

echo 'valores mas altos';
for ($i=count($valores2)-1; $i>=count($valores2)-3; $i--) { 
   echo $valores[$i].',';
}
echo 'valores mas altos';
for ($i=count($valores2)-3; $i<count($valores2); $i++) { 
   echo $valores2[$i].',';
}


//queda pendiente hacerlo eliminando las claves de un arreglo; y los tipos de datos especiales esos
?>