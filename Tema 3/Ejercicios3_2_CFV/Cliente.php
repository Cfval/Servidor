
<?php

class Cliente {
    private $nombre;
    private $numero;
    private $maxAlquilerConcurrente;
    private $numSoportesAlquilados = 0;
    private $soportesAlquilados = [];

    public function __construct($nombre, $numero, $maxAlquilerConcurrente = 3) {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNumSoportesAlquilados() {
        return $this->numSoportesAlquilados;
    }

    public function muestraResumen() {
        echo "Cliente: {$this->nombre}, Alquileres: " . count($this->soportesAlquilados) . "<br>";
    }

    public function tieneAlquilado(Soporte $s) {
        return in_array($s, $this->soportesAlquilados, true);
    }

    public function alquilar(Soporte $s) {
        if ($this->tieneAlquilado($s)) {
            echo "El soporte ya está alquilado<br>";
            return false;
        }
        if ($this->numSoportesAlquilados >= $this->maxAlquilerConcurrente) {
            echo "Límite de alquileres alcanzado<br>";
            return false;
        }
        $this->soportesAlquilados[] = $s;
        $this->numSoportesAlquilados++;
        echo "Soporte alquilado correctamente<br>";
        return true;
    }

    public function devolver($numSoporte) {
        foreach ($this->soportesAlquilados as $index => $soporte) {
            if ($soporte->getNumero() == $numSoporte) {
                unset($this->soportesAlquilados[$index]);
                $this->numSoportesAlquilados--;
                echo "Soporte devuelto correctamente<br>";
                return true;
            }
        }
        echo "Soporte no encontrado<br>";
        return false;
    }

    public function listarAlquileres() {
        echo "Cliente: {$this->nombre}, tiene " . count($this->soportesAlquilados) . " alquileres:<br>";
        foreach ($this->soportesAlquilados as $soporte) {
            $soporte->muestraResumen();
        }
    }
}
?>
