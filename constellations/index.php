<?php 
    require 'inc/fxs.php';
    incluirTemplate ('header', $inicio = true);
?>

<main class="conteiner-section">
    <h1>Nosotros somos... </h1>
    <div class="aboutus">
        <div class="img">
            <picture>
                <source srcset="build/img/aboutus.webp" type="image/webp">
                <source srcset="build/img/aboutus.jpg" type="image/jpeg">
            </picture>
        </div>
        <div class="text-abousus">
            <blockquote></blockquote>
            <p></p>
        </div>
        <div class="alinear-derecha">
            <a href="aboutus.php" class="boton-mint">Más sobre nosotros</a>
        </div>
    </div>
</main>
<section class="conteiner-section bottom">
    <section class="blog">
        <h2>Nuestro blog</h2>
        <article class="blogpost">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="lazy" src="build/img/blog1.jpg" alt="Ve la nota completa">
                </picture>
            </div>
            
        <?php 
            $limite = 3;
            include 'includes/templates/blog.php';
        ?>

            <div class="text-blog">
                <a href="blogpost1.php">Artículo de Blog 1</a>
                <p class="info-meta">Escrito por <span></span> el día <span></span>  </p>
                <p>
                    aquí el tema
                </p>
            </div>
        </article>
    </section>
    <section class="conteiner-section bottom">
    <section class="blog">
        <h2>Nuestro blog</h2>
        <article class="blogpost">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="lazy" src="build/img/blog2.jpg" alt="Ve la nota completa">
                </picture>
            </div>
            <div class="text-blog">
                <a href="blogpost1.php">Artículo de Blog 2</a>
                <p class="info-meta">Escrito por <span></span> el día <span></span>  </p>
                <p>
                    aquí el tema
                </p>
            </div>
        </article>
    </section>
</section>
<section class="conteiner-section bottom">
    <section class="blog">
        <h2>Nuestro blog</h2>
        <article class="blogpost">
            <div class="img">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="lazy" src="build/img/blog3.jpg" alt="Ve la nota completa">
                </picture>
            </div>
            <div class="text-blog">
                <a href="blogpost3.php">Artículo de Blog 3</a>
                <p class="info-meta">Escrito por <span></span> el día <span></span>  </p>
                <p>
                    aquí el tema
                </p>
            </div>
        </article>
    </section>

<section class="section-conteiner">
    <h2>Nuestros productos son </h2>
    <p>pensados en crecer y llegar al siguiente nivel</p>
    
    <h3></h3>
    <?php
    $limite = 3;
    include 'inc/templates/posts.pohp';
    ?>
    <divc class="right-align">
        <a href="posts.php">¡Visita nuestro catálogo completo!</a>
    </div>
</section>
<section class="img-contact">
    <h3></h3>
    <p></p>

</section>
</div>

<?php incluirTemplate('footer'); ?>
