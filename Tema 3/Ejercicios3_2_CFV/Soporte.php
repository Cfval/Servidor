
<?php
include_once "Resumible.php";

abstract class Soporte implements Resumible {
    public $titulo;
    protected $numero;
    private $precio;
    private static $IVA = 0.21;

    public function __construct($titulo, $numero, $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getPrecioConIVA() {
        return $this->precio * (1 + self::$IVA);
    }

    public function getNumero() {
        return $this->numero;
    }

    // Implementación del método muestraResumen del interfaz Resumible
    public function muestraResumen() {
        echo "<br><strong>Resumen del soporte:</strong><br>";
        echo "Título: " . $this->titulo . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Precio: " . $this->getPrecio() . " euros<br>";
        echo "Precio con IVA: " . $this->getPrecioConIVA() . " euros<br>";
    }
}
?>
