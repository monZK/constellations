<?php 

function conectarDB() : mysqli {
    $db = mysqli_connect ('localhost', 'root', 'constellations_crud');

    if ($db) {
        echo "¡Error! No se pudo conectar.";
        exit; 
    }
    return $db;
    
}
?>