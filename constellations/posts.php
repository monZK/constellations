<?php
require 'inc/fxs.php';
incluirTemplate('header');
?>

<main class="conteiner-section">
    <h2>Nuestro <span>Catálogo</span></h2>
    <?php
    $limite10 = 10;
    include 'inc/templates/posts.php';
    ?>
</main>

<?php incluirTemplate('footer'); ?>
