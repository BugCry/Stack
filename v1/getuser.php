<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
echo "id = $q"; //q = id ?

//conexion manual
//$con = mysqli_connect('localhost','root','test','test');
//if (!$con) {
//  die('Could not connect: ' . mysqli_error($con));
//}

require('./conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB

$sql="SELECT * FROM ajax WHERE id = '".$q."'"; //consulta sql
$result = mysqli_query($con,$sql);

echo "<table> <!--Se está enviando un codigo en html para generar el formulario-->
<tr>
<th>nombre</th>
<th>apellido</th>
<th>edad</th>
<th>trabajo</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "<td>" . $row['edad'] . "</td>";
  echo "<td>" . $row['trabajo'] . "</td>";
  echo "</tr>";
}
echo "</table>";
/*
$datos = array("nombre" => "php","apellido" => "php","edad" => 11,"trabajo" => "php");
$statement = $con->prepare("CALL AñadirUsuario(?,?,?,?)"); //es la consulta preparada
$statement->bind_param("ssis", $datos["nombre"], $datos["apellido"], $datos["edad"], $datos["trabajo"]); //argumentos -> 1. Formato de los datos 2. Los datos
$statement->execute();
echo"se añadio:";
var_dump($datos);
$statement->close();
*/
mysqli_close($con); //cerrar lo conexion para seguridad
?>
</body>
</html>