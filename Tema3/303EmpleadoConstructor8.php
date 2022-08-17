<?php


/*
303EmpleadoConstructor8.php: Modifica la clase y utiliza la sintaxis de PHP 8 de promoción de las propiedades del constructor.
*/


class Empleado{

    public function __construct(private string $nombre, private string $apellido, private float $sueldo=1000, private array $telefonos=array()){
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
        if ($this->sueldo>3333){
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
}


//Comprobación de la clase

$persona = new Empleado("Miguel", "Tomás", 10000.56,array('965554877','965554378'));

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
$persona->listarTelefonos();
echo "<br>";
echo "Vaciando telefonos";
$persona->vaciarTelefonos();
echo $persona;