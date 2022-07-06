<?php 
require __DIR__ . ' /../config/database.php';

$query = "SELECT * FROM properties LIMIT $(limite)";

$resultado = mysqli_query ($db, $query);
?>

<?php 

$limite = 3;
include 'includes/templates/posts.php';
?>

<div class="conteiner-post">
    <?php while($product = mysqli_fetch_assoc($resultado)); ?>
    <div class="post">
        <img loading ="lazy" src="/../img/<?php echo$product['imagen']; ?>"  alt="post">
        <div class="conteiner-post">
            <h3><?php $product ['titulo']; ?> </h3>
            <p> <?php $product ['description']; ?> </p>
            <p class="basic"> $<?php echo$product['basicLevel']; ?> </p>
            <ul class="icon">
                <li>
                    <img class="icon" loading="lazy" src="build/img/.svg" alt="Nivel Pro">
                    <p> <?php echo$product['proLevel']; ?> </p>
                    <a href="post.php?id= <?php echo $product  ['id']; ?> " class="mint-button-block" >Ve detalles</a>
                </li>
                <li>
                    <img class="icon" loading="lazy" src="build/img/.svg" alt="Servicio Premium">
                    <p> <?php echo$product['premLevel']; ?> </p>
                    <a href="blog.php?id=<?php echo $product['id']; ?> " class="mint-button-block"> Servicio Premium</a>
                </li>
            </ul>
        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php mysqli_clase($db); ?>