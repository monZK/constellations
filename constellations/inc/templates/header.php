<?php 

if (isset ($_SESSION)) {
    session_start ();
}

$auth = $_SESSION ['login'] ?? false; 

?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset= "UTF-8">
        <meta name ="viewport" content ="width-device-width, initial-scale= 1.0">
        <title>Constellations - Inicio </title>
        <Link rel=" stylesheet" href="/build/css/app.css">
    </head>
    <body>
        <header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
        <div class="conteiner header">
            <div class"bar">
                <a href="">
                    <img src="/build/img/logo.svg" alt="Constellations"> 
                </a>

                <div class="mobile-menu">
                    <img src="build/img/menu.svg" alt="Constellations - Menú">
                </div>

                <div class="right">
                    <img  class="dark-mode-button" src="/build/img/dark-mode.svg" alt="Dark Mode">
                    <nav class="nav">
                        <a href="constellations.php">Nosotros</a>
                        <a href="guide.php">Catálogo</a>
                        <a href="blog.php">Blog</a>
                        <a href="contact.php">Contacto </a>
                        <?php if($auth):  ?>
                            <a href="logout.php">Salir de Sesión</a>
                        <?php endif; ?>    
                    </nav>
                </div>
            </div>    
                <?php echo $inicio ? " <h2>Creating... </h2> " : ''; ?>
                <?php echo $inicio ? " <h1>Constellations</h1> " : ''; ?>
                
        </div>

        </header>
    </body>
</html>