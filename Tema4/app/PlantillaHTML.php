<?php

namespace app;

class PlantillaHTML
{
    private $titulo;

    /**
     * @param $titulo
     */
    public function __construct($titulo)
    {
        $this->titulo = $titulo;
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

    public function insertarEncabezado():string{
        return "<!DOCTYPE html>
                <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <title>$this->titulo</title>
                </head>
                <body>";
    }

    public function cerrarCuerpo():string{
        return "</body>";
    }

    function insertarFormularioLogin(string $action, $metodo):string{
        return "<form action=$action method=$metodo>

            <label for='inputUsuario'>Introduce tu usuario</label>
            <input type='text' name='usuario' id='inputUsuario' placholder='Introduce tu usuario' alt='introducir usuario'>

            <label for='inputContrasenya'>Introduce tu contraseña</label>
            <input type='password' name='contrasenya' id='inputContrasenya' placeholder='Introduce tu contraseña' var='introducir contrasenya'> 
            
            <button type='submit'>Acceder</button>            
            </form>


     ";
    }


}