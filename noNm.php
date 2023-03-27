<?php
$mysqli = new mysqli('localhost','root','','sire');

$re = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'sire' AND TABLE_NAME = 'horario_salida'");
for($i=0; $i < $re->num_rows; $i++){
    $fila_usuario = $re->fetch_assoc();
    if ($i == 0) {
        continue;
    }
    $ka = $fila_usuario['COLUMN_NAME']."</br>";
    explode(", ", $ka);
    echo $ka;
}
?>