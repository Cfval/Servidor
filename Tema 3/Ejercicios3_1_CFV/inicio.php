<?php
include_once "Soporte.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";

// Soporte
$soporte1 = new Soporte("Tenet", 22, 3); 
echo "<strong>" . $soporte1->titulo . "</strong>"; 
echo "<br>Precio: " . $soporte1->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
$soporte1->muestraResumen();

echo "<br><br>";

// CintaVideo
$cinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107); 
echo "<strong>" . $cinta->titulo . "</strong>"; 
echo "<br>Precio: " . $cinta->getPrecio() . " euros"; 
echo "<br>Precio IVA incluido: " . $cinta->getPrecioConIVA() . " euros";
$cinta->muestraResumen();

echo "<br><br>";

// Dvd
$dvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
echo "<strong>" . $dvd->titulo . "</strong>";
echo "<br>Precio: " . $dvd->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $dvd->getPrecioConIVA() . " euros";
$dvd->muestraResumen();

echo "<br><br>";

// Juego
$juego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);
echo "<strong>" . $juego->titulo . "</strong>";
echo "<br>Precio: " . $juego->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $juego->getPrecioConIVA() . " euros";
$juego->muestraResumen();
?>

