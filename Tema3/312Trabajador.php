<?php


/*
312Trabajador.php: Copia las clases del ejercicio anterior y modifícalas.

Cambia la estructura de clases conforme al gráfico respetando todos los métodos que ya están hechos.
Trabajador es una clase abstracta que ahora almacena los telefonos y donde calcularSueldo es un método abstracto de manera que:
El sueldo de un Empleado se calcula a partir de las horas trabajadas y lo que cobra por hora.
Para los Gerentes, su sueldo se incrementa porcentualmente en base a su edad: salario + salario*edad/100

*/


abstract class Persona{

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

    abstract public static function toHtml(Persona $pers):string;
}

abstract class Trabajador extends Persona{
    private $telefonos;

    public function __construct(string $nombre,string $apellido, int $edad){
        parent::__construct($nombre,$apellido,$edad);
        $telefonos=array();
    }

    public function getTelefonos():array | null{
        return $this->telefonos;
    }
    public function setTelefonos(array $telefonos){
        $ths->telefonos=$telefonos;
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
        $salida = "<p>".$pers->getNombre()." ". $pers->getApellido()."<p>";
        $salida .="<p>Edad: ". $pers->getEdad();
        if ($pers instanceof Trabajador){
            
            if($pers->getTelefonos()){
                $salida .="<ol>";
                foreach($pers->getTelefonos() as $telefono){
                    $salida.="<li>$telefono</li>";
                }
                $salida.="</ol>";
            }
        }
        return $salida;
    }

    abstract public function calcularSueldo();

}

class Empleado extends Trabajador{

    private $horasTrabajadas;
    private $precioPorHoras;
    
    private static $sueldoTope=3333;

    public function __construct(string $nombre,string $apellido, int $edad){
        parent::__construct($nombre,$apellido,$edad);
        $this->precioPorHoras=0.0;
        $this->horasTrabajadas=0;
    }

    public function getHorasTrabajadas():int{
        return $this->horasTrabajadas;
    }
    public function setHorasTrabajadas(int $horasTrabajadas){
        $this->horasTrabajadas=$horasTrabajadas;
    }

    public function getPrecioPorHora():float{
        return $this->precioPorHora;
    }

    public function setPrecioPorHora(float $precioPorHoras){
        $this->precioPorHoras=$precioPorHoras;
    }
    
    public static function getSueldoTope():float{
        return Self::$sueldoTope;
    }
    public static function setSueldoTope(float $sueldoTope=3333){
        Self::$sueldoTope=$sueldoTope;
    }
    public function __toString():string{
        $retorno= $this->nombre. " " .$this->apellido.": Edad: ". $this->edad. " Sueldo: ".$this->calcularSueldo();
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
    

    public static function toHtml(Persona $pers): string{
        $salida = Trabajador::toHtml($pers);
        $salida .="<p>Sueldo: ".$pers->calcularSueldo()."</p>";
        return $salida;
    }

    public function calcularSueldo(){
        return $this->horasTrabajadas*$this->precioPorHoras;
    }
}

class Gerente extends Trabajador{
    private $salario;

    public function __construct(string $nombre,string $apellido, int $edad, float $salario){
        parent::__construct($nombre,$apellido,$edad);
        $this->salario=$salario;
    }

    public function calcularSueldo(){
        return $this->salario += $this->salario*$this->getEdad()/100;
    }

    public static function toHtml(Persona $pers): string{
        $salida = Trabajador::toHtml($pers);
        $salida .="<p>Sueldo: ".$pers->calcularSueldo()."</p>";
        return $salida;
    }
}


$empleado1= new Empleado ('Miguel','Angel', 27);

$empleado1->setPrecioPorHora(30);
$empleado1->setHorasTrabajadas(100);

$gerente = new Gerente('Alba','Navarro',23,30000);

echo Gerente::toHtml($gerente);
echo Empleado::toHtml($empleado1);


