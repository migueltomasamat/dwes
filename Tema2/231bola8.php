<?php

/*
231bola8.php: A partir del anterior, crea un programa que muestre la pregunta recibida y genere una respuesta de manera aleatoria entre un conjunto de respuestas predefinidas, 
almacenadas en un array: Si, no, quizás, claro que sí, por supuesto que no, no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
*/

$arrayRespuestas = array("Si", "No","Quizas","Claro que sí", "Por supuesto que no","No lo tengo claro","Seguro","Yo diría que sí","Ni de coña");

echo $_POST['pregunta'] ."<br>";
echo $arrayRespuestas[rand(0,count($arrayRespuestas))];