<?php
include_once "Soporte.php";

class Juego extends Soporte {

    public $consola;
    private $minNumJugadores;
    private $maxNumJugadores;

    // Constructor de la clase Juego
    public function __construct($titulo, $numero, $precio, $consola, $minNumJugadores, $maxNumJugadores) {
        // Constructor de la clase padre
        parent::__construct($titulo, $numero, $precio);
        // Atributos específicos de Juego
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    // Método público para mostrar los jugadores posibles
    public function muestraJugadoresPosibles() {
        if ($this->minNumJugadores == $this->maxNumJugadores) {
            if ($this->minNumJugadores == 1) {
                echo "Para un jugador<br>";
            } else {
                echo "Para " . $this->minNumJugadores . " jugadores<br>";
            }
        } else {
            echo "De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores<br>";
        }
    }

    // Reride muestraResumen
    public function muestraResumen() {
        // Llama al método muestraResumen del padre
        parent::muestraResumen();
        // Muestra la consola y los jugadores posibles
        echo "Consola: " . $this->consola . "<br>";
        $this->muestraJugadoresPosibles();
    }
}
?>
