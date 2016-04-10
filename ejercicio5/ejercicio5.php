<?php

//*****************************//

// Ejercicio #5 

// Sista Lucero Menjivar Guardado

// Carnet mg02110100

// Programacion 2 ULS

//****************************//

//Ejercicio de multiplicacion rusa

$multiplicador=37;
$multiplicando=12;
echo "El Numero Multiplicador es: \n".$multiplicador;
echo"\n";
echo "El Numero Multiplicando es: \n".$multiplicando;
echo"\n";
$multiplicacionRusa=0;
//Haciendo el ciclo hasta que la columna 1 llegue hasta 1.
    while($multiplicador>=1){
//Verificando si la columna 2 es impar
        if($multiplicador%2!=0){
        $multiplicacionRusa+=$multiplicando; 
        }
 //dividiendo entre 2 el numero y multiplicando por 2 el numero2
        $multiplicador=$multiplicador/2;
        $multiplicando=$multiplicando*2;
    }
                function Rusa( $multiplicacionRusa){
	return $multiplicacionRusa;
 }
echo "El Resultado por el metodo de multiplicacion rusa es: \n".$multiplicacionRusa;
 
?>