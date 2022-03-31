<?php include("db.php"); ?>
<?php
    if (isset($_POST['actualizar'])) {
        $usuario =$_POST['usuario'];
        $contraseña =$_POST['contraseña'];
        $query_usuario = "SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$contraseña'";
        $result_usuario = mysqli_query($conn,  $query_usuario);
        $row = mysqli_fetch_array($result_usuario);
        $idiUsu = $row['id'];
        $_SESSION['idU'] = $row['id'];
        if (mysqli_num_rows($result_usuario) == 1) {
            //echo $_SESSION['idU'];
            header("Location: index.php");
        }else{
            header("Location: login.php");
        }
    }
?>

