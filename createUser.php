<?php 
    require('./BD/conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB
    $mysqli = $con;
    
    $_C01=$_POST['C01'];
    $_C02=$_POST['C02'];
    $_C03=$_POST['C03'];
    $_C04=$_POST['C04'];
    
    $statement = $mysqli->prepare("CALL AñadirUsuario(?,?,?,?)"); //es la consulta preparada
    $statement->bind_param("ssis", $_C01, $_C02, $_C03, $_C04); //argumentos -> 1. Formato de los datos 2. Los datos
    $statement->execute();
    if($statement){
        echo 1;
    }else{
        echo 0;
    }
    $statement->close();
    mysqli_close($mysqli); //cerrar lo conexion para seguridad

?>