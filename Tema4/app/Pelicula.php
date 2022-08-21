<?php

namespace app;

class Pelicula{

    private $titulo;
    private $anyo;
    private $director;

    /**
     * @param $titulo
     * @param $anyo
     * @param $director
     */
    public function __construct($titulo, $anyo, $director)
    {
        $this->titulo = $titulo;
        $this->anyo = $anyo;
        $this->director = $director;
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

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director): void
    {
        $this->director = $director;
    }

    public function __toString():string{
        return "Pelicula: ".$this->getTitulo(). "(" .$this->getAnyo() . "-" .$this->getDirector();
    }

    public function mostrarDatosPeliculaLista():string{
        return "<li>Título: ".$this->getTitulo()." (".$this->getAnyo().") - ".$this->getDirector()."</li>";
    }
    public function mostrarDatosPeliculaTabla():string{
        return "<tr><td>".$this->getTitulo()."</td><td>".$this->getAnyo()."</td><td>". $this->getDirector(). "</td></tr>";
    }

}