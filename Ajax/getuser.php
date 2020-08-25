<?php
$q = intval($_GET['q']);

require('../BD/conexion.php'); //llama al archivo conexion y utiliza su variable $con para establecer una conexion con la DB

$sql="SELECT * FROM ajax WHERE id = '".$q."'"; //consulta sql
$result = mysqli_query($con,$sql);

echo "<div class='table table-striped table-bordered table-responsive'> <!--Se está enviando un codigo en html para generar el formulario-->
<table class='table table-hover'>
<thead>
<tr>
<th scope='col'>#</th>
<th scope='col'>Nombre</th>
<th scope='col'>Apellido</th>
<th scope='col'>Edad</th>
<th scope='col'>Trabajo</th>
</tr>
</thead>
<tbody>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<th scope='row'>" . $row['id'] . "</th>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "<td>" . $row['edad'] . "</td>";
  echo "<td>" . $row['trabajo'] . "</td>";
  echo "</tr>";
}
echo "</tbody>
</table>
</div>";

mysqli_close($con); //cerrar lo conexion para seguridad
?>