<?php include("db.php")?>
<?php
    if (isset($_POST['Guardar'])) {
        $nombre = $_POST['Nombre'];
        $numero = $_POST['Numero'];
        $descripcion = $_POST['Descripcion'];
        $id = $_SESSION['idU'];
        $query ="INSERT INTO contacto(nombre,numero,descripcion,iduser) VALUES ('$nombre',$numero,'$descripcion',$id)";
        $result = mysqli_query($conn,  $query);
        if (!$result) {
            die("fallo insersion");
        }
        $_SESSION['message'] ='El contacto a sido guardado';
        $_SESSION['message_type']='success';
        header("Location: index.php");
    }
?>
