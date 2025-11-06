<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <?php   
    $usuario = NULL;
    if(isset($_COOKIE['usuario'])) {
        echo "Bienvenido de nuevo, " . $usuario . "!<br>";
    }elseif($_SERVER['REQUEST_METHOD']=="POST"){
        $usuario = $_POST['usuario'];
        setcookie('usuario', $usuario, time() + (86400 * 30), "/");
        echo "Bienvenido, " . $usuario . "!<br>";
    }else{
        echo '<form method="post">
                Nombre de usuario: <input type="text" name="usuario">
                Contraseña: <input type="password" name="contraseña">
                <input type="submit" value="Enviar">
              </form>';
    }
    ?>
</body>
</html>