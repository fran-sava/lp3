<?php
include 'conexion.php';
if(isset($_POST['Insertar'])){
if(isset($_POST['nombre']) && isset($_POST['apellido'])){
$exite=true;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido']; 
}else{
    $exite = false;
    echo 'No existe el nombre o el apellido';
}
    if($exite){
        $query = mysqli_query($conexion, "INSERT INTO persona (id, nombre, apellido)
        VALUES(null, '$nombre', '$apellido')")
        or die('error'.mysqli_error($conexion));
        
        if($query){
            echo "La insercion de datos fue exitosa!!";?>
            <meta http-equiv="refresh" content="5, url=http://localhost/lp3/php/pruebamysql/index.php">  
        <?php }else{
            echo 'Problemas para insertar';
        }
    }
}
elseif(isset($_POST['EnviarEditar'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $query = mysqli_query($conexion, "UPDATE persona SET nombre='$nombre', 
    apellido='$apellido' WHERE id=$id")
        or die('error'.mysqli_error($conexion));
    if($query){
        echo "La modificación fue exitosa"; ?>
        <meta http-equiv="refresh" content="5, url=http://localhost/lp3/php/pruebamysql/index.php">
    <?php } else {
        echo "No se pudo realizar la modificación";
    }
}
elseif(isset($_POST['EnviarBorrar'])){
    $id = $_POST['id'];
    $query = mysqli_query($conexion, "DELETE FROM persona WHERE id=$id")
        or die('error'.mysqli_query($conexion));
    if($query){
        echo 'Se eliminó CORRECTAMENTE!!'; ?>
        <meta http-equiv="refresh" content="5, url=http://localhost/lp3/php/pruebamysql/index.php">
    <?php }else{
        echo 'Problemas para ELIMINAR!';
    }
}








?>























