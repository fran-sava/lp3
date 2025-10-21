<h1>Funciones</h1>
<?php
/*
function NombreDeLaFuncion(parametros){
    instrucciones de codigo;
}
*/

function holamundo(){
    echo "Hola mundo desde una funcion";
}
holamundo();//Llamar a la funcion

echo "<h1>Funciones pasandole argumentos</h1>";
function NombreFamiliar($nombre){
    echo "El nombre del familiar es: $nombre </strong><br>";
}
//Utilizar o llamar a la funcion
NombreFamiliar("Juan");
NombreFamiliar("Maria");
NombreFamiliar("Liliana");

echo "<h1>Funciones pasandole a 2 argumentos</h1>";
function NombreAño($vnombre, $año) {
    echo "$vnombre su año de nacimiento es: $año<br><br>";
}

NombreAño("Sonia", "1994");
NombreAño("Raquel", "1998");
NombreAño("Julio", "1988");

echo "<h1>Función de suma de valores</h1>";
function SumarNros(int $nro1, int $nro2) {
    return $nro1 + $nro2;
}

// Ejemplo de uso
echo "La suma es: " . SumarNros(10, 5);






?>