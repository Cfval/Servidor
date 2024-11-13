
<?php
include_once "Videoclub.php"; // Incluimos solo la clase Videoclub
include_once "Resumible.php";

// Creamos un videoclub
$vc = new Videoclub("Severo 8A");

// Incluimos algunos soportes
$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 4.5, "es", "16:9");
$vc->incluirDvd("Origen", 4.5, "es,en,fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 3, "es,en", "16:9");
$vc->incluirCintaVideo("Los cazafantasmas", 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);

// Listamos los productos del videoclub
$vc->listarProductos();

// Creamos algunos socios
$vc->incluirSocio("Amancio Ortega");
$vc->incluirSocio("Pablo Picasso", 2);

// Alquilamos algunos productos a los socios
$vc->alquilaSocioProducto(1, 2);
$vc->alquilaSocioProducto(1, 3);

// Intentamos alquilar de nuevo un soporte ya alquilado por el mismo socio
$vc->alquilaSocioProducto(1, 2);

// Intentamos alquilar un soporte superando el límite de alquileres permitidos
$vc->alquilaSocioProducto(1, 6);

// Listamos los socios y sus alquileres
$vc->listarSocios();
?>
