<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id) {
    header('Location: inc\templates\header.php');
}

require 'inc/config/database.php';
$db = conectarDB();

$resultado = mysqli_query($db, $query);

if(!$resultado->num_rows){
    header('Location : inc\templates\header.php');
}

$product = mysqli_fetch_assoc($resultado);

require 'inc/fxs.php';
incluirTemplate('header');

?>


<main class="conteiner-section center">
<h3 class="product"><?php echo $product ['pTitle']; ?> </h3>
<img loading="lazy" src="/img/<?php echo $product['image']; ?> " alt="Tienda en Línea">
<div class="product-post">   
    <p class="product"><?php echo $product['pResume']; ?>  </p>
    <ul class="icon-feauters">
        <li>
            <img class="icon" loading="lazy" src="build/img/i-pro.svg" alt="Pro">
            <p><?php echo $product ['pro']; ?> </p>
        </li>
        <li>
            <img class="icon" loading="lazy" src="build/img/i-premium.svg" alt="Premium">
            <p><?php echo $product ['premium']; ?> </p>
        </li>
        <li>
            <img class="icon" loading="lazy" src="build/img/i-preview.svg" alt="Preveiew">
            <p><?php echo $product ['preview']; ?> </p>
        </li>
        <li>
            <img class="icon" loading="lazy" src="build/img/i-contact.svg" alt="Contactanos">
            <p><?php echo $product ['contact']; ?> </p>
        </li>
    </ul>
</div> 
</main>

<?php
 mysqli_close($db);

 incluirTemplate('footer');
?>