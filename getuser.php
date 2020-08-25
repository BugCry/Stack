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

require('./BD/conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB

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

mysqli_close($con); //cerrar lo conexion para seguridad
?>
</body>
</html>