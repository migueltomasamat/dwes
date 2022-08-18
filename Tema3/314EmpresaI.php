<?php

/*
314EmpresaI.php: Copia las clases del ejercicio anterior y modifícalas.

Crea un interfaz JSerializable, de manera que ofrezca los métodos:
toJSON(): string → utiliza la función json_encode(mixed). Ten en cuenta que como tenemos las propiedades de los objetos privados, 
debes recorrer las propiedades y colocarlas en un mapa. Por ejemplo:

<?php
public function toJSON(): string {
    foreach ($this as $clave => $valor) {
        $mapa->$clave = $valor;
    }
    return json_encode($mapa);
}
?>
toSerialize(): string → utiliza la función serialize(mixed)
Modifica todas las clases que no son abstractas para que implementen el interfaz creado.

*/

interface JSerializable{

    public function toJSON():string;

    public function toSerialize():string;
}

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

class Empleado extends Trabajador implements JSerializable{

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

    public function toJSON():string{
        foreach($this as $clave => $valor){
            $mapa[$clave]=$valor;
        }
        return json_encode($mapa);

    }

    public function toSerialize():string{
        return serialize($this);

    }
}

class Gerente extends Trabajador implements JSerializable{
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
    public function toJSON():string{
        foreach($this as $clave => $valor){
            $mapa[$clave]=$valor;
        }
        return json_encode($mapa);

    }

    public function toSerialize():string{
        return serialize($this);

    }
}

class Empresa implements JSerializable{

    private $nombre;
    private $direccion;
    private $trabajadores;

    public function __construct(string $nombre,string $direccion){
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->trabajadores = array();
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function getDireccion():string{
        return $this->direccion;
    }
    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }
    public function getTrabajadores():array|null{
        $retorno=null;
        if ($this->trabajadores!=null){
            $retorno =$this->trabajadores;
        }
        return $retorno;
        
    }
    public function setTrabajadores(array $trabajadores){
        $this->trabajadores=$trabajadores;
    }

    public function anyadirTrabajador(Trabajador $t){
        if ($this->getTrabajadores()==null){
            $this->setTrabajadores(array($t));
        }else{
            
            array_push($this->trabajadores,$t);
        }
        
    }

    public function listarTrabajadoresHtml(): string{
        $string='';
        foreach($this->getTrabajadores() as $trabajador){
            $string = $string.Trabajador::toHtml($trabajador);
        }
        return $string;
    }

    public function toJSON():string{

        foreach ($this as $clave=>$valor){
            $mapa[$clave]=$valor;
        }
        return json_encode($mapa);
        
    }
    public function toSerialize():string{
        return serialize($this);
    }

}


//Prueba de las funciones
$empresa= new Empresa('IES Paco Molla','Av. Reina Sofía');

$ger = new Gerente("Miguel","Tomas",29,30000);
echo "versionJSON:<br>".$ger->toJSON()."<br>";
echo "versionSerialize:<br>".$ger->toSerialize()."<br>";

$emp = new Empleado ("Alba", "Navarro", 33);
$emp->setPrecioPorHora(30);
$emp->setHorasTrabajadas(50);
echo "versionJSON:<br>".$emp->toJSON()."<br>";
echo "versionSerialize:<br>".$emp->toSerialize()."<br>";

$empresa->anyadirTrabajador($ger);
$empresa->anyadirTrabajador($emp);

echo $empresa->getNombre()." ". $empresa->getDireccion()."<br>";
echo "versionJSON:<br>".$empresa->toJSON()."<br>";
echo "versionSerialize:<br>".$empresa->toSerialize()."<br>";