<?php

/*
 * 413logout.php: vacía la sesión y nos lleva de nuevo al formulario de inicio de sesión.
 * No contiene código HTML
 */

session_destroy();
header("refresh=0;url=410index.php");