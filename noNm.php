<?php
    $mysqli = new mysqli('localhost','root','','sire');
    $result = "SELECT Nombre FROM estudiante WHERE ID_E = 2397";
    $resu = $mysqli->query($result);
    if ($result) {
        if (mysqli_num_rows($resu)) {
            $row = mysqli_fetch_assoc($resu);
            echo $row["Nombre"];
        }
    }
    $mysqli->close();
?>