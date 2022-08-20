<?php

/*
 * 412peliculas.php: vista que muestra como título "Listado de Películas", y una lista desordenada con tres películas.
 */
namespace app;
include_once "app/PlantillaHTML.php";
use app\PlantillaHTML;

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
        return "<tr><td>".$this->getTitulo()."</td><td>".$this->getAnyo()."</td></td>". $this->getDirector(). "</tr>";
    }

}

function crearListaDesdeArray(array $arrayPeliculas):string{
    $salida="<ul>";
    foreach($arrayPeliculas as $valor){
        $salida  .= $valor->mostrarDatosPeliculaLista();
    }
    $salida .= "</ul>";
    return $salida;
}

$p1=new Pelicula("Padrino 1",1956, "Martin Scorsese");
$p2=new Pelicula("Regreso al futuro",1986,"Robert Zemekis");
$p3=new Pelicula("Forest Gump",1998,"Robert Zemekis");

$arrayPeli=array();
array_push($arrayPeli,$p1);
array_push($arrayPeli,$p2);
array_push($arrayPeli,$p3);

$plantilla = new PlantillaHTML("Listado de Películas");

echo $plantilla->insertarEncabezado().crearListaDesdeArray($arrayPeli).$plantilla->cerrarCuerpo();


