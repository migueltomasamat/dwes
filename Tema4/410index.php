<?php

/*
 *
 * 410index.php: formulario de inicio de sesión
 *
 */

function insertarFormularioLogin(string $action):string{
    return "<form action=$action method='post'>

            <label for='inputUsuario'>Introduce tu usuario</label>
            <input type='text' name='usuario' id='inputUsuario' placeholder='Introduce tu usuario' alt='introducir usuario'>

            <label for='inputContrasenya'>Introduce tu contraseña</label>
            <input type='password' name='contrasenya' id='inputContrasenya' placeholder='Introduce tu contraseña' var='introducir contrasenya'> 
            
            <button type='submit'>Acceder</button>            
            </form>


     ";
}
echo insertarFormularioLogin("411login.php");