<!DOCTYPE html>
<html>
<body>
<?php
    //Comentario de linea simple
    /*comentario extendido*/
    //Variable
    $variable=5;
    echo $variable;
    echo"<hr>";//Ingresar codigo html en php
    $cadena = "Hola mundo desde PHP";
    print $cadena;
    echo"<hr>";//Ingresar codigo html en php
    $cadena2 = 'Hola mundo desde PHP';
    echo "<h1>$cadena2</h1>";
    echo "Esto es ", "String ", "Se puede escribir separados entre ,";
    echo"<hr>";
    $variablebuleana = false;
    var_dump($variablebuleana);//Sirve para saber que contiene una variable
    echo "<hr>";
    $variabledecimal = 3.14;
    var_dump($variabledecimal);
?>
    <h1>Tipo de datos objetos</h1>
    <?php

    class Auto{
        function(Auto){
            $this->marca="Kia";
            $this->modelo="Picanto"
            $this->motor="2.0"
        }
    }
    $automovil = new Auto();
    echo $automovil->modelo;
    echo $automovil->motor;
    echo $automovil->marca;

    echo"<hr>";
    echo"<h1>Variables null</h1>";
    $x = null;
    var_dump($s);
    
    
    
    ?>
</body>
</html>