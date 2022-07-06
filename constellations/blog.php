<?php 
require 'inc/fxs.php';
incluirTemplate('header');
?>

<main class="conteiner-section center">
    <h3>Únete a la constelación y comenta en nuestro <span>BLOG</span></h3>
    <article class="blog-post">
        <div class="img">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source source="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Publicación del Blog">
            </picture>
        </div>
        <div class="blog-post">
        <a href="blogpost-1.php">
            <h4>Título de entrada de blog</h4>
            <p>Por: <?php $user['uName'];?> el día: <span><?php $fecha ?></span> </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae quos illum illo nulla voluptatibus voluptates maxime necessitatibus, maiores similique unde, nam ut fugiat incidunt dicta sunt quisquam. Maiores, perferendis? </p>
        </a>
        </div>
    </article>
</main>
<main class="conteiner-section center">
    <article class="blog-post">
        <div class="img">
            <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source source="build/img/blog2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog2.jpg" alt="Publicación del Blog">
            </picture>
        </div>
        <div class="blog-post">
        <a href="blogpost-2.php">
            <h4>Título de entrada de blog</h4>
            <p>Por: <?php $user['uName'];?> el día: <span><?php $fecha ?> </span> </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae quos illum illo nulla voluptatibus voluptates maxime necessitatibus, maiores similique unde, nam ut fugiat incidunt dicta sunt quisquam. Maiores, perferendis?</p>
        </a>
        </div>
    </article>
</main>
<main class="conteiner-section center">
    <article class="blog-post">
        <div class="img">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source source="build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog3.jpg" alt="Publicación del Blog">
            </picture>
        </div>
        <div class="blog-post">
        <a href="blogpost-3.php">
            <h4>Título de entrada de blog</h4>
            <p>Por: <?php $user['uName'];?> el día: <span><?php $fecha?> </span> </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae quos illum illo nulla voluptatibus voluptates maxime necessitatibus, maiores similique unde, nam ut fugiat incidunt dicta sunt quisquam. Maiores, perferendis?</p>
        </a>
        </div>
    </article>
</main>
<main class="conteiner-section center">
    <article class="blog-post">
        <div class="img">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source source="build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog4.jpg" alt="Publicación del Blog">
            </picture>
        </div>
        <div class="blog-post">
        <a href="blogpost-4.php">
            <h4>Título de entrada de blog</h4>
            <p>Por: <?php $user['uName'];?> el día: <span><?php $fecha?> </span> </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quae quos illum illo nulla voluptatibus voluptates maxime necessitatibus, maiores similique unde, nam ut fugiat incidunt dicta sunt quisquam. Maiores, perferendis?</p>
        </a>
        </div>
    </article>
</main>

<?php 
require 'inc/fxs.php';
incluirTemplate('footer');
?>
