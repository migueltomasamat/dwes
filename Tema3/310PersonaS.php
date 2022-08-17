<?php


/*
310PersonaS.php: Copia las clases del ejercicio anterior y modifícalas.
Añade nuevos métodos que hagan una representación de todas las propiedades de las clases Persona y Empleado, de forma similar a los realizados en HTML, 
pero sin que sean estáticos, de manera que obtenga los datos mediante $this.

function public __toString(): string
*/


class Persona{

    protected $nombre;
    protected $apellido;
    protected $edad;

    public function getNombre ():string{
        return $this->nombre;
    }
    public function getApellido():string{
        return $this->apellido;
    }
    public function getEdad():int{
        return $this->edad;
    }
    public function setEdad(int $edad){
        $this->edad=$edad;
    }

    public function __construct(string $nombre, string $apellido, int $edad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }

    public function __toString():string{
        $retorno= $this->nombre. " " .$this->apellido.": ". $this->edad;
    }

    public function getNombreCompleto():string{
        return $this->nombre." ".$this->apellido;
    }

    public static function toHtml(Persona $pers): string{
        $salida = "<p>".$pers->getNombre()." ". $pers->getApellido()."<p><br>";
        $salida .="<p>Edad: ". $pers->getEdad();
        
        return $salida;
    }
}

class Empleado extends Persona{

    private $sueldo;
    private $telefonos;
    private static $sueldoTope=3333;

    public function __construct(string $nombre,string $apellido, int $edad, float $sueldo=1000){
        parent::__construct($nombre,$apellido,$edad);
        $this->sueldo=$sueldo;
        $this->telefonos = array();
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
        $retorno= $this->nombre. " " .$this->apellido.": Edad: ". $this->edad. " Sueldo: ".$this->sueldo;
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
    
    public function debePagarImpuestos():bool{
        $retorno = false;
        if ($this->sueldo>Self::$sueldoTope && $this->getEdad()>21){
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

    public static function toHtml(Persona $pers): string{
        $salida = Persona::toHtml($pers);
        if ($pers instanceof Empleado){
            $salida .= "<p>".$pers->getSueldo()."<p><br>";
        
            $salida .="<ol>";
            foreach($pers->getTelefonos() as $telefono){
                $salida.="<li>$telefono</li>";
            }
            $salida.="</ol>";
        }
        return $salida;
    }
}


//Comprobación de la clase

$persona = new Empleado("Miguel", "Tomás", 21, 4377);

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


