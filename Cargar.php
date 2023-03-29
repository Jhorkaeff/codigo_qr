<?php include("template/Cabacera.php"); ?>

<link rel="stylesheet" href="CSS/css/Cargar.css">
	
	<section>
		<form action="car.php" method="post" enctype="multipart/form-data">
			<div class = "col-sm-8">
					<h3>DBQR</h3>
					<br>
					<h4>IMPORTANTE: <span><font color="white">Agregue los datos del estudiante</font></span></h4>
					<br>
					<li>Calidad H de imagen: <span><font color="white">se le dara la mas alta calidad posible a las imagenes qr</font></span></li>
					<br>
					<li>Tamaño 10: <span><font color="white">Calidad H de imagen: el tamaño proporcional que se le dara a las qr</font></span></li>
					<br>
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
	</section>
	<?php include("template/Pie.php"); ?> 
	<script>
		var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
	</script>
	</div>	
</body>
</html>