<?php

include_once './312Trabajador.php';

class Empresa{

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
}

//Prueba de las funciones
$empresa= new Empresa('IES Paco Molla','Av. Reina Sofía');

$ger = new Gerente("Miguel","Tomas",29,30000);
$emp = new Empleado ("Alba", "Navarro", 33);
$emp->setPrecioPorHora(30);
$emp->setHorasTrabajadas(50);

$empresa->anyadirTrabajador($ger);
$empresa->anyadirTrabajador($emp);

echo $empresa->getNombre()." ". $empresa->getDireccion()."<br>";
echo $empresa->listarTrabajadoresHtml();