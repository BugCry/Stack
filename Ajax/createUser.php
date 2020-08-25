<?php
require('../BD/conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB
$mysqli = $con;

if (!empty($_POST['C04'])) {

    $_C01 = trim($_POST['C01']);
    $_C02 = trim($_POST['C02']);
    $_C03 = trim($_POST['C03']);
    $_C04 = trim($_POST['C04']);

    $statement = $mysqli->prepare("CALL AñadirUsuario(?,?,?,?)"); //es la consulta preparada
    $statement->bind_param("ssis", $_C01, $_C02, $_C03, $_C04); //argumentos -> 1. Formato de los datos 2. Los datos
    $statement->execute();
    if ($statement) {
        echo 1;
    } else {
        echo 0;
    }
    sleep(2); //un parametro para que el proceso no sea instantaneo
    $statement->close();

} else {
    echo 0;
}

mysqli_close($mysqli); //cerrar la conexion para seguridad
?>
