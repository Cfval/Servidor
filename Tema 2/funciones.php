<?php
/////////EJERCICIO 1/////////

// Función para convertir de dólares a euros
function dolar2euros($cantidad, $cotizacion = 0.93) {
    return floatval($cantidad) * floatval($cotizacion);
}

// Función para convertir de euros a dólares
function euros2dolar($cantidad, $cotizacion = 1.08) {
    return floatval($cantidad) * floatval($cotizacion);
}

/////////EJERCICIO 2/////////

// Función para sumar los elementos de un array y modificarlo opcionalmente
function sumarArray(&$array, $factor = null) {
    // Si se pasa un factor, multiplicamos cada elemento del array por ese factor
    if ($factor !== null) {
        foreach ($array as &$valor) {
            $valor *= $factor;
        }
    }

    // Sumamos los elementos del array con la funcion nativa de PHP
    return array_sum($array);
}

/////////EJERCICIO 3/////////

// Función para concatenar múltiples cadenas con un delimitador opcional
function concatenarCadenas($delimitador = " ", ...$cadenas) {
    return implode($delimitador, $cadenas); // Une los elementos de un array usando un delimitdor especificado
}

/////////EJERCICIO 4/////////

// Función para filtrar los números pares y multiplicarlos por 2
// Parámetro opcional para devolver todo el array, incluyendo impares
function filtrarParesYMultiplicar(&$array, $devolverCompleto = false) {
    $paresMultiplicados = [];

    // Recorremos el array por referencia para modificarlo si es par
    foreach ($array as &$valor) {
        if ($valor % 2 == 0) {
            // Si es par, lo multiplicamos por 2
            $valor *= 2;
            // Lo añadimos al array de pares multiplicados
            $paresMultiplicados[] = $valor;
        }
    }

    // Si $devolverCompleto es true, devolvemos el array modificado completo
    if ($devolverCompleto) {
        return $array;
    } else {
        // Devolvemos solo los pares multiplicados
        return $paresMultiplicados;
    }
}

?>
