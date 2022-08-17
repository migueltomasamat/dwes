<?php


/*
Crea una clase Empleado con su nombre, apellidos y sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:
Obtener su nombre completo → getNombreCompleto(): string
Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el sueldo es superior a 3333€) → debePagarImpuestos(): bool
*/


class Empleado{

    private $nombre;
    private $apellido;
    private $sueldo;

    public function __construct(string $nombre,string $apellido, float $sueldo){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->sueldo=$sueldo;
    }

    public function getNombre ():string{
        return $this->nombre;
    }
    public function setNombre(string $nombre){
        $this->nombre=$nombre;
    }
    public function getApellido():string{
        return $this->apellido;
    }
    public function setApellido(string $apellido){
        $this->apellido=$apellido;
    }
    public function getSueldo ():float{
        return $this->sueldo;
    }
    public function setSueldo(float $sueldo){
        $this->sueldo=$sueldo;
    }
    public function __toString():string{
        return $this->nombre. " " .$this->apellido.": ". $this->sueldo;
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
}


//Comprobación de la clase

$persona = new Empleado("Miguel", "Tomás", 10000.56);

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