<?php
include_once "Soporte.php";

class Dvd extends Soporte {
    // Atributos específicos de la clase Dvd
    private $idiomas;
    private $formatoPantalla;

    // Constructor de la clase Dvd
    public function __construct($titulo, $numero, $precio, $idiomas, $formatoPantalla) {
        // Llamamos al constructor de la clase padre "Soporte"
        parent::__construct($titulo, $numero, $precio);
        // Luego se asignan los nuevos valores
        $this->idiomas = $idiomas;
        $this->formatoPantalla = $formatoPantalla;
    }

    // Reride del método muestraResumen
    public function muestraResumen() {
        // Llama al método muestraResumen del padre
        parent::muestraResumen();

        echo "Idiomas: " . $this->idiomas . "<br>";
        echo "Formato de pantalla: " . $this->formatoPantalla . "<br>";
    }
}
?>
