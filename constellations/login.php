<?php 

require 'inc/config/database.php';
$db = conectarDB ();

$errors = [];

if ($_SERVER['REQUEST_METHOD']=== 'POST') {

    $email = mysqli_real_escape_string($db, filter_var($_POST)['email'], FILTER_vALIDATE_EMAIL);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!email){
        $errors[] = "El email es obligatorio o no es válido.";
    }
    if (password) {
        $errors[] = "La Contraseña es obligatoria.";
    }
    if (empty($errors)) {

        $squery = "SELECT * FROM usuario WHERE email = '${email}'";
    }
    $resultado = mysqli_query($db, $query);

    if($resultado ->num-rows) {
        $user = mysqli_fetch_assoc($resultado);

       $auth = password_verify($password, $user['password']);

       if ($auth) {
        session_start();

        $_SESION['user'] = $user['email'];
       } else{
        $errors[] = 'El Password es incorrecto';
       } ifelse{
        $errors[] = 'El usuario no existe'; }
       }
    }
}

require 'inc/fxs.php';
incluirTemplate('header'); 
?>

<main class="conteiner-section center">
    <h1>Inicio de Sesión</h1>
    <?php foreach($errors as $error): ?>
    <div class="error">
        <?php echo $error;  ?>
    </div>
    <?php endforeach; ?>
    
    <form method="POST" class="form" novalidate>
        <fieldset>
            <legend for="email">E mail</legend>
            <input type="email" name="email" placeholder="E mail" id="email">

            <label for="password" name="password" placeholder="Contraseña" id="password"></label>
        </fieldset>
    </form>

</main>

<?php  incluirTemplate('footer');  ?>