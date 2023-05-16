<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Persona{
    protected $nombre;
    protected $apellido;
    protected $edad;

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre() : string{
        return $this->nombre;
    }

    public function getApellido() : string{
        return $this->apellido;
    }

    public function getEdad() : int{
        return $this->edad;
    }

    public function setNombre($nombre) : void{
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) : void{
        $this->apellido = $apellido;
    }

    public function setEdad($edad) : void{
        $this->edad = $edad;
    }

    final public function imprimirInformacion() : void{
        echo "Nombre: " . $this->getNombre();
        echo "<br>";
        echo "Apellido: " . $this->getApellido();
        echo "<br>";
        echo "Edad: " . $this->getEdad();
        echo "<br>";
    }

    abstract public function calcularSalario() : float;
}

class Empleado extends Persona{
    private $salario;

    public function __construct($nombre, $apellido, $edad, $salario){
        parent::__construct($nombre, $apellido, $edad);
        $this->salario = $salario;
    }

    public function getSalario() : float{
        return $this->salario;
    }

    public function setSalario($salario) : void{
        $this->salario = $salario;
    }

    public static function generarInforme() : string{
        return "Este es el informe de los empleados.";
    }

    public function calcularSalario() : float{
        // Aquí se puede implementar el cálculo del salario del empleado.
        return $this->salario;
    }
}

$empleado1 = new Empleado("Alberto", "Jiron", 35, 500.0);
$empleado1->imprimirInformacion();
echo "Salario: C$" . $empleado1->calcularSalario();
echo "<br>";
echo Empleado::generarInforme();