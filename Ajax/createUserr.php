<?php
require('../BD/conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB
$mysqli = $con;
$validator = false;

foreach ($_POST as $data) {
    if(empty($data)){
        echo 01;
        
    }else if (ctype_space($data)){
        echo 02;
        
    }else{
        $validator = true;
    }
  }

if ($validator == true) {

        $_C01 = $_POST['C01'];    
        $_C02 = $_POST['C02'];    
        $_C03 = $_POST['C03'];    
        $_C04 = $_POST['C04'];    
        
    } else {

        echo 03;
        

    }

$statement = $mysqli->prepare("CALL AñadirUsuario(?,?,?,?)"); //es la consulta preparada
$statement->bind_param("ssis", $_C01, $_C02, $_C03, $_C04); //argumentos -> 1. Formato de los datos 2. Los datos
$statement->execute();
if (!$statement) {
    echo 1;
} else {
    echo 04;
    
}
sleep(2); //un parametro para que el proceso no sea instantaneo
$statement->close();
mysqli_close($mysqli); //cerrar la conexion para seguridad
?>