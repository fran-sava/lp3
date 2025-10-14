<h1>Funciones con cadena</h1>
<?php
echo strlen("Hola mundo desde php");//La cantidad de valores que contiene una cadena
echo "<hr>";
$cadena = "  hola mundo  ";
echo trim($cadena);//Sacar espacios de cadenas de texto
echo "<hr>";
echo str_word_count("Hola mundo desde PHP");//Contador de palabras
echo "<hr>";
$cadena = "Hola mundo desde php";
echo strrev($cadena);//Sirve para invertir valores
echo "<hr>";
echo strpos("Hola mundo desde php", "mundo");
echo "<hr>";
echo str_replace("mundo", "planeta", "Hola mundo");
echo "<hr>";
echo (pi());//Devuelve el nro pi
echo "<hr>";
echo (min(0,150,30,85,10,-100, -102));//Trae el valor minimo de una cadena de nros
echo (max(0,150,30,85,10,-100, -102));// Trae el valor mayor de una cadena de nros
echo "<hr>";
echo "<h1>Variables constantes</h1>";
define("nombredeconstante", "Bienvenidods al curso de php");//Se define primero el nombre y luegp el valor
echo nombredeconstante;//Se imprime de esta forma el nombre de la constante
echo "<hr>";
define("autos", ["BMW", "Toyota", "Nissan", "Kia"]);
echo autos[3];














?>