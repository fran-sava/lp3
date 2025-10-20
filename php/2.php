<h1>Condicionales en php</h1>
<h2>Condicional if</h2>
<?php
/*if(condicion){
    bloque de instrucciones
}else{
    bloque de instrucciones
}
else if (condicion){
}
*/

$hora = date('H');
if ($hora > "19") {
    echo "Que tengas buen dia";
}
?>

<h2>Condicional if else</h2>
<?php
$hora = date('H');
if ($hora < "19") {
    echo "Que tengas un buen dia";
}else{
    echo "Que tengas buenas noches";
}
?>

<hr>
<h2>Condicional else if</h2>
<?php
$hora = date('H');
if ($hora < "10") {
    echo "Que tengas un buen dia";
}elseif($hora > "20"){
    echo "Que tengas buena tarde";
}
else{
    echo "Que tengas buenas noches";
}
?>

<h1>Swicht</h1>
<?php
$color = "";
switch("$color"){
    case "rojo";
        echo "Mi color favorito es rojo";
        break;
    case "azul";
        echo "Mi color favorito es azul";
        break;
    case "verde";
        echo "Mi color favorito es verde";
        break;
        default:
        echo "Mi color favorito no esta entre esas opciones";
}
?>
    