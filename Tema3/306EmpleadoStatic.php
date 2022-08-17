<?php


/*
306EmpleadoStatic.php: Copia la clase del ejercicio anterior y modifícala. 
Completa el siguiente método con una cadena HTML que muestre los datos de un empleado dentro de un párrafo y 
todos los teléfonos mediante una lista ordenada (para ello, deberás crear un getter para los teléfonos):

public static function toHtml(Empleado $emp): string
*/


class Empleado{

    private $nombre;
    private $apellido;
    private $sueldo;
    private $telefonos;
    private static $sueldoTope=3333;

    public function __construct(string $nombre,string $apellido, float $sueldo=1000){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->sueldo=$sueldo;
        $this->telefonos = array();
    }

    public function getNombre ():string{
        return $this->nombre;
    }
    public function getApellido():string{
        return $this->apellido;
    }
    public function getSueldo ():float{
        return $this->sueldo;
    }
    public function setSueldo(float $sueldo){
        $this->sueldo=$sueldo;
    }
    public function getTelefonos():array{
        return $this->telefonos;
    }
    public function setTelefonos(array $telefonos){
        $ths->telefonos=$telefonos;
    }

    public static function getSueldoTope():float{
        return Self::$sueldoTope;
    }

    public static function setSueldoTope(float $sueldoTope=3333){
        Self::$sueldoTope=$sueldoTope;
    }

    public function __toString():string{
        $retorno= $this->nombre. " " .$this->apellido.": ". $this->sueldo;
        $retorno.="[";
        foreach ($this->telefonos as $clave=>$telefono){
            if ($clave==array_key_last($this->telefonos)){
                $retorno.=$telefono;
            }else{
                $retorno.=$telefono.",";
            }
        }
        $retorno.="]";
        return $retorno;

    }
    public function getNombreCompleto():string{
        return $this->nombre." ".$this->apellido;
    }
    public function debePagarImpuestos():bool{
        $retorno = false;
        if ($this->sueldo>Self::$sueldoTope){
            $retorno = true;
        }
        return $retorno;
    }
    public function anyadirTelefono(int $telefono) : void{
        array_push($this->telefonos,$telefono);
    }
    public function listarTelefonos(): string{
        $retorno=false;
        foreach ($this->telefonos as $clave=>$telefono){
            if ($clave==array_key_last($this->telefonos)){
                $retorno.=$telefono;
            }else{
                $retorno.=$telefono.",";
            }
        }
        return $retorno;
    }
    public function vaciarTelefonos(): void{
        $this->telefonos=array();
    }

    public static function toHtml(Empleado $emp): string{
        $salida = "<p>".$emp->getNombre()." ". $emp->getApellido().". Salario: ".$emp->getSueldo()."<p><br>";
        $salida .="<ol>";
        foreach($emp->getTelefonos() as $telefono){
            $salida.="<li>$telefono</li>";
        }
        $salida.="</ol>";
        return $salida;
    }
}


//Comprobación de la clase

$persona = new Empleado("Miguel", "Tomás", 4377);

//Probamos el método __toString
echo $persona. "<br>";

//Mostramos el nombre y los apellidos
echo $persona->getNombreCompleto()."<br>";

//Comprobamos si debe pagar impuestos

if ($persona->debePagarImpuestos()){
    echo "Debe pagar impuestos";
}else{
    echo "Se libra";
}


//Añadimos un teléfono

$persona->anyadirTelefono('91547145047');
echo "<br>";
$persona->anyadirTelefono('965554738');
echo "<br>";
$persona->listarTelefonos();
echo "<br>";


//Mostrando persona con HTML

echo "Impresión del elemento en HTML<br>";
echo Empleado::toHtml($persona);
