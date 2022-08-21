<?php

namespace app;

class Serie{

    private $titulo;
    private $anyo;

    /**
     * @param $titulo
     * @param $anyo
     * @param $director
     */
    public function __construct($titulo, $anyo)
    {
        $this->titulo = $titulo;
        $this->anyo = $anyo;
    }


    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAnyo()
    {
        return $this->anyo;
    }

    /**
     * @param mixed $anyo
     */
    public function setAnyo($anyo): void
    {
        $this->anyo = $anyo;
    }

    public function __toString():string{
        return "Pelicula: ".$this->getTitulo(). "(" .$this->getAnyo();
    }

    public function mostrarDatosSerieLista():string{
        return "<li>Título: ".$this->getTitulo()." (".$this->getAnyo().")</li>";
    }
    public function mostrarDatosSerieTabla():string{
        return "<tr><td>".$this->getTitulo()."</td><td>".$this->getAnyo()."</td></tr>";
    }

}