<?php
 
require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false ) {
    include TEMPLATES_URL . "/$(nombre).php";   
}

function AutenticacionCorrecta () : bool {
    session_start();

    $auth = $_SESSION ['LOGIN'];
    if ($auth) {
        return true; 
    }
    return false; 
}

?>
 