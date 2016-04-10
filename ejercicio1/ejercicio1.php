

<?php

//*****************************//

// Ejercicio #1 

// Sista Lucero Menjivar Guardado

// Carnet mg02110100

// Programacion 2 ULS

//****************************//

//Invertir numero de tres dijitos 

//Numero a invertir
$numInvertir=345;
echo "El Numero a invertir es:\n ".$numInvertir;
//inicializamos el numero invertido
$invertido=0;
//Mientras el numero invertido es mayor o igual a uno 
//se llevara a cabo la invercion del numero dado.
   while ($numInvertir >= 1){
   $invertido=$invertido*10+$numInvertir%10;
   $numInvertir=$numInvertir/10;
   }

//imprime el numero invertido
echo "El Numero invertido es: \n".$invertido;

function invertir( $numInvertir){
	return $numInvertir=$invertido;
}
?>


