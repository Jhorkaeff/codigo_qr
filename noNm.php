<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sire";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$e = "tup2397@tecplayacar.edu.mx";
$sql = "SELECT Correo From estudiante WHERE LOWER(Correo) = '".strtolower($e)."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$Correo = $row['Correo'];
echo $Correo;
?>