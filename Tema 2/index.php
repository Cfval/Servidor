<?php
// Incluir el archivo con las funciones
include 'funciones.php';

/////////EJERCICIO 1/////////

// Inicializamos una variable para el resultado
$resultado1 = '';

// Comprobamos si se ha enviado el formulario 
if (isset($_POST['ejercicio1'])) {
    // Obtener la cantidad y tipo de conversión
    $cantidad = $_POST['cantidad'];
    $conversion = $_POST['conversion'];
    $cotizacion = $_POST['cotizacion'];

    // Si la cotización está vacía, usamos el valor por defecto
    if (empty($cotizacion)) {
        $cotizacion = null;
    }

    // Realizar la conversión
    if ($conversion == 'dolar2euros') {
        $resultado1 = dolar2euros($cantidad, $cotizacion ?? 0.93);
    } elseif ($conversion == 'euros2dolar') {
        $resultado1 = euros2dolar($cantidad, $cotizacion ?? 1.08);
    }
}

/////////EJERCICIO 2/////////

// Comprobamos si se ha enviado el formulario 
if (isset($_POST['ejercicio2'])) {
    // Convertimos el string del input en un array con el explode
    $array = explode(",", $_POST['array']);
    
    // Validamos el factor (si se pasa uno), en caso de que no se pase se deja null por defecto
    $factor = !empty($_POST['factor']) ? floatval($_POST['factor']) : null;
    
    // Llamamos a la función sumarArray
    $resultado2 = sumarArray($array, $factor);
}


/////////EJERCICIO 3/////////

// Comprobamos si se ha enviado el formulario del ejercicio 3
if (isset($_POST['ejercicio3'])) {
    // Convertimos las cadenas en un array separándolas por comas
    $cadenas = explode(",", $_POST['cadenas']);
    
    // Si se pasa un delimitador, lo usamos, si no, será un espacio
    $delimitador = !empty($_POST['delimitador']) ? $_POST['delimitador'] : " ";
    
    // Llamamos a la función concatenarCadenas
    $resultado3 = concatenarCadenas($delimitador, ...$cadenas);
}


/////////EJERCICIO 4/////////

// Comprobamos si se ha enviado el formulario del ejercicio 4
if (isset($_POST['ejercicio4'])) {
    // Convertimos el input del array en un array de números
    $array = explode(",", $_POST['array']);
    $array = array_map('intval', $array); // Convertimos los valores a enteros para asegurarnos
    
    // Verificamos si se ha marcado la opción para devolver el array completo
    $devolverCompleto = isset($_POST['devolverCompleto']);

    // Llamamos a la función filtrarParesYMultiplicar
    $resultado4 = filtrarParesYMultiplicar($array, $devolverCompleto);
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 2.3</title>
</head>
<body>
    <h1>Ejercicios 2.3 - Funciones, Bucles y Arrays</h1>

    <!-- Ejercicio 1 -->
    <h2>Ejercicio 1</h2>
    <form method="POST">
        <input type="hidden" name="ejercicio1" value="1">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <br>

        <label for="conversion">Tipo de conversión:</label>
        <select name="conversion" id="conversion">
            <option value="dolar2euros">Dólares a Euros</option>
            <option value="euros2dolar">Euros a Dólares</option>
        </select>
        <br>

        <label for="cotizacion">Cotización (opcional):</label>
        <input type="number" step="0.01" name="cotizacion" id="cotizacion" placeholder="Valor por defecto si se deja en blanco">
        <br>

        <input type="submit" value="Convertir">
    </form>

    <!--Resultado del ejercicio 1 -->
    <?php if (!empty($resultado1)) : ?>
        <h3>Resultado: <?php echo $resultado1; ?></h3>
    <?php endif; ?>
    
    <br><br>

    <!-- Ejercicio 2 --> 
    <h2>Ejercicio 2</h2>
    <form method="POST">
        <input type="hidden" name="ejercicio2" value="2">
        
        <label for="array">Introduce los elementos del array separados por comas:</label>
        <input type="text" name="array" id="array" required placeholder="Ej: 1,3,3,2,9">
        <br>

        <label for="factor">Factor de multiplicación (opcional):</label>
        <input type="number" step="0.25" name="factor" id="factor" placeholder="">
        <br>

        <input type="submit" value="Calcular suma">
    </form>
    
    <!-- Resultado del ejercicio 2 -->
    <?php if (!empty($resultado2)) : ?>
        <h3>Resultado de la suma: <?php echo $resultado2; ?></h3>
    <?php endif; ?>

    <br><br>

    <!-- Ejercicio 3 -->
    <h2>Ejercicio 3</h2>
    <form method="POST">
        <input type="hidden" name="ejercicio3" value="3">
        
        <label for="cadenas">Introduce las cadenas de texto separadas por comas:</label>
        <input type="text" name="cadenas" id="cadenas" required placeholder="Ej: Sandía,Platano,Dos ciruelas">
        <br>

        <label for="delimitador">Delimitador (opcional):</label>
        <input type="text" name="delimitador" id="delimitador" placeholder="Por defecto será un espacio">
        <br>

        <input type="submit" value="Concatenar">
    </form>
    
    <!-- Resultado del ejercicio 3 -->
    <?php if (!empty($resultado3)) : ?>
        <h3>Resultado concatenado: <?php echo $resultado3; ?></h3>
    <?php endif; ?>
    
    <br><br>

    <!-- Ejercicio 4 -->
    <h2>Ejercicio 4</h2>
    <form method="POST">
        <input type="hidden" name="ejercicio4" value="4">
        
        <label for="array">Introduce los números del array separados por comas:</label>
        <input type="text" name="array" id="array" required placeholder="Ej: 1,2,3,4">
        <br>

        <label for="devolverCompleto">¿Con números impares en el resultado?:</label>
        <input type="checkbox" name="devolverCompleto" id="devolverCompleto">
        <br>

        <input type="submit" value="Filtrar y Multiplicar">
    </form>
    
    <!-- Resultado del ejercicio 4 -->
    <?php if (!empty($resultado4)) : ?>
        <h3>Resultado:</h3>
        <p><?php echo implode(" ", $resultado4); ?></p>
    <?php endif; ?>


    <br><br>
</body>
</html>

