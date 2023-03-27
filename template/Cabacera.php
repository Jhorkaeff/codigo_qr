<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Bienvenido Sitio </title>
        <link rel="stylesheet" href="CSS/css/Cabecera.css">
    </head>
    <body>
        <nav id="navbar">
            <img src="/img/logo.png" class="logo">
            <ul id="menu">
                <li>Inicio</li>
                <li>Crear QR</li>
                <li>Cargar QR</li>
            </ul>
        </nav>

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