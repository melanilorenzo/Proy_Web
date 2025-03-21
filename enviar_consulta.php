<?php
$pelicula_form = $_POST['nombre_pelicula'];
$director_form = $_POST['director'];
$escena_form = $_POST['escena_fav'];

// $conexion = mysqli_connect ('localhost', 'root', '', 'desweb_inicial')
// or exit ("No se pudo conectar a la base de datos");


$conexion = mysqli_connect ('sql301.infinityfree.com', 'if0_38046427', 'yBdcjnPHNB', 'if0_38046427_cursodesweb')
or exit ("No se pudo conectar a la base de datos");



mysqli_query($conexion, "INSERT INTO peliculas VALUES (DEFAULT, '$pelicula_form', '$director_form', '$escena_form')");

mysqli_close($conexion);

header("Location: confirmo_envio.php?ok" );

