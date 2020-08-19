<?php
require('./BD/conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB
$mysqli = $con;

if (!empty($_POST)) {
    
    //validacion si el campo está completamente en blanco
    if (  ((ctype_space($_POST['C01'])) == false ) && ((ctype_space($_POST['C02']))== false) && ((ctype_space($_POST['C03']))== false) && ((ctype_space($_POST['C04']))== false)    ) {
    //puede mejorarse con un for each        

        $_C01 = $_POST['C01'];    
        $_C02 = $_POST['C02'];    
        $_C03 = $_POST['C03'];    
        $_C04 = $_POST['C04'];    
        
    } else {

        echo 0;
        mysqli_close($mysqli); //cerrar la conexion

    }
}

$statement = $mysqli->prepare("CALL AñadirUsuario(?,?,?,?)"); //es la consulta preparada
$statement->bind_param("ssis", $_C01, $_C02, $_C03, $_C04); //argumentos -> 1. Formato de los datos 2. Los datos
$statement->execute();
if ($statement) {
    echo 1;
} else {
    echo 0;
}
$statement->close();
mysqli_close($mysqli); //cerrar la conexion para seguridad
?>