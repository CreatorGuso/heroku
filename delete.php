<?php include("db.php") ?>
<?php
    if (isset($_GET['id'])) {
        $id= $_GET['id'];
        $query = "DELETE FROM contacto WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("error al eliminar contacto");
        }

        $_SESSION['message'] = 'Contacto eliminado correctamente';
        $_SESSION['message_type'] ='danger';
        header("Location: index.php");
    }
?>
