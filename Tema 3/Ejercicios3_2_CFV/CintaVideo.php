<?php
include_once "Soporte.php";

class CintaVideo extends Soporte {
    // Atributo específico de la clase CintaVideo
    private $duracion;

    // Constructor de la clase CintaVideo
    public function __construct($titulo, $numero, $precio, $duracion) {
        // Llamamos al constructor de la clase padre Soporte
        parent::__construct($titulo, $numero, $precio);
        // Asignamos la duración de la cinta
        $this->duracion = $duracion;
    }

    // Sobreescribimos el método muestraResumen
    public function muestraResumen() {
        // Llamamos al método muestraResumen del padre
        parent::muestraResumen();
        // Mostramos la duración específica de la cinta de video
        echo "Duración: " . $this->duracion . " minutos<br>";
    }
}
?>
