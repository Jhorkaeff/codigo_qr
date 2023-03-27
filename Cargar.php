<!DOCTYPE html>
<html>
	<head>
		<title>Hola, Mundo 1</title>
		<link rel="stylesheet" href="CSS/css/Cargar.css">
	</head>
	
	<body background="img/ne.jpg">
		<header><?php include("template/Cabacera.php"); ?></header>
		<form action="car.php" method="post" enctype="multipart/form-data">
			<div class = "col-sm-8">
				<font color = "white">
					<h3>DBQR</h3>
					<h4> 
						<p><font color="blue">IMPORTANTE </font> Agregue los datos del estudiante</p>
						<li><font color="blue">Calidad H de imagen: </font> se le dara la mas alta calidad posible a las imagenes qr </li>
						<li><font color="blue">Tamaño 10: </font> el tamaño proporcional que se le dara a las qr</li>
					</h4>
					<p>Nivel: H</p>
					<p>Tamaño: 10</p>
					<div class="form-group">
						<label>ID: </label>
						<select name="ID">
							<option value="1">Selecciona la ID:</option>
							<?php
							$mysqli = new mysqli('localhost','root','','sire');
							$query = "SELECT ID_Q FROM qr";
							$resu = $mysqli->query($query);
							if($resu != false){
								$sql = "SELECT ID_Q FROM qr";
							}else{
								echo 'La consulta a ocurrido un error';
							}
							for($i=0; $i < $resu->num_rows; $i++){
								$fila_usuario = $resu->fetch_assoc();
								echo '<option>'.$fila_usuario['ID_Q'].'</option>';
							}
							$mysqli->close();
							?>
						</select>
					</div>
				</font>
			</div>
			<button type="submit" value="Generar" name="generar">Guardar</button>
		</form>
	</body>
</html>
<?php include("template/Pie.php"); ?>  