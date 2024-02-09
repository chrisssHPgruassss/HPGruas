<html>
<head>
    <title>Formulario de Información</title>
</head>
<body>
    <center><h1>Revisa Disponibilidad</h1>
    <form action="" method="POST">
	<center><img src="R1.jpg" width="200" height="200"><center>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dispo";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $empresa = $_POST["empresa"];
    $operador = $_POST["operador"];
    $grua = $_POST["grua"];
    $ubicacion = $_POST["ubicacion"];
    $contacto = $_POST["contacto"];

  
    $sql = "UPDATE informacion SET empresa='$empresa', operador='$operador', grua='$grua', ubicacion='$ubicacion', contacto='$contacto' WHERE id=$id";
  echo "<center>";
    if ($conn->query($sql) === TRUE) {
        echo "Los cambios se han guardado correctamente.";
    } else {
        echo "Error al guardar los cambios: " . $conn->error;
    }
}
  echo "</center>";
  echo "<center>";
echo "<br>";
echo "<a href='pagina.php'>       Regresar</a>";
  echo "</center>";

$conn->close();
?>
</body>
</html>