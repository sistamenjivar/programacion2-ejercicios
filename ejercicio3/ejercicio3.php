<?php
//*****************************//

// Ejercicio #3

// Sista Lucero Menjivar Guardado

// Carnet mg02110100

// Programacion 2 ULS


//****************************//
//El radio es el numero que se ingresa 
$radio=5;
$area=0;
$perimetro=0;
//Proceso para obtener el area y el perimetro
    if ($area=3.14*$radio*$radio){
    $perimetro=2*$radio*3.14;
    }
//Imprime el resultado del area y el perimetro del circulo
echo"El radio del circulo es:\n".$radio;
echo"\n ";
echo"El area del circulo es:\n".$area;
echo"\n ";
echo"El perimetro del circulo es:\n".$perimetro;
echo"\n ";

function circulo( $area,$perimetro){
	return $area;
}
?>