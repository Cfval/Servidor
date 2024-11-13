
<?php
include_once "Cliente.php";
include_once "CintaVideo.php";
include_once "Dvd.php";
include_once "Juego.php";
include_once "Resumible.php";

class Videoclub {
    private $nombre;
    private $productos = [];
    private $socios = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Método privado para añadir un producto al array de productos
    private function incluirProducto(Soporte $producto) {
        $this->productos[] = $producto;
    }

    // Métodos públicos para incluir distintos tipos de productos
    public function incluirJuego($titulo, $precio, $consola, $minJugadores, $maxJugadores) {
        $juego = new Juego($titulo, count($this->productos) + 1, $precio, $consola, $minJugadores, $maxJugadores);
        $this->incluirProducto($juego);
    }

    public function incluirDvd($titulo, $precio, $idiomas, $formatoPantalla) {
        $dvd = new Dvd($titulo, count($this->productos) + 1, $precio, $idiomas, $formatoPantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirCintaVideo($titulo, $precio, $duracion) {
        $cinta = new CintaVideo($titulo, count($this->productos) + 1, $precio, $duracion);
        $this->incluirProducto($cinta);
    }

    // Método para añadir un nuevo socio
    public function incluirSocio($nombre, $maxAlquileres = 3) {
        $socio = new Cliente($nombre, count($this->socios) + 1, $maxAlquileres);
        $this->socios[] = $socio;
    }

    // Método para listar todos los productos
    public function listarProductos() {
        echo "<br><strong>Productos disponibles en el videoclub:</strong><br>";
        foreach ($this->productos as $producto) {
            $producto->muestraResumen();
            echo "<br>";
        }
    }

    // Método para listar todos los socios
    public function listarSocios() {
        echo "<br><strong>Socios registrados en el videoclub:</strong><br>";
        foreach ($this->socios as $socio) {
            $socio->muestraResumen();
            echo "<br>";
        }
    }

    // Método para que un socio alquile un producto
    public function alquilaSocioProducto($numeroSocio, $numeroProducto) {
        if (isset($this->socios[$numeroSocio - 1]) && isset($this->productos[$numeroProducto - 1])) {
            $socio = $this->socios[$numeroSocio - 1];
            $producto = $this->productos[$numeroProducto - 1];
            $socio->alquilar($producto);
        } else {
            echo "Error: Socio o producto no encontrado<br>";
        }
    }
}
?>
