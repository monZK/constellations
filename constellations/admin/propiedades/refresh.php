<?php 

require '../inc/fx.php';
$auth = autenticacionCorrecta ();

if (!$auth) {
    header ('Location: /');
}

//validando LogIn
$id = $_GET ['id'];
$id = filter_var ($id, FILTER_VALIDATE_INT);

if(!$id) {
    header('Location: ../admin');
}

//Database
require ('../..inc/config/database.php');
$db = conectarDB();

//Solicitud de cotización
$consulta = "SELECT * FROM catalogo WHERE id = ${id}";
$cotizacion = mysqli_query($db, $consulta);
$producto = mysqli_fetch_assoc($resultado);

//Contacto para solicitar servicio
$consulta = "SELECT * FROM contact";
$resultado = mysqli_query ($db, $consulta);

//Error (falta declarar variables)
$errores = [];


?>