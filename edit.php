<?php include("db.php") ?>

<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM contacto WHERE id = $id";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre= $row['nombre'];
            $numero= $row['numero'];
            $descripcion= $row['descripcion'];
        }
    }

    if (isset($_POST['actualizar'])) {
        $id= $_GET['id'];
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
        $descripcion = $_POST['descripcion'];
        $query_actualizar = "UPDATE contacto SET nombre='$nombre', numero=$numero , descripcion='$descripcion' WHERE id=$id"; 
        $result = mysqli_query($conn, $query_actualizar);
        if (!$result) {
            die("error al editar contacto");
        }
        $_SESSION['message']='El contacto se edito correctamente';
        $_SESSION['message_type']='warning';
        header("Location: index.php");
    }
?>

<?php include("include/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>"
                        class="form-control" placeholder="Actualizar nombre">
                    </div><br>
                    <div class="form-group">
                        <input type="number" name="numero" value="<?php echo $numero; ?>"
                        class="form-control" placeholder="Actualizar numero">
                    </div><br>
                    <div class="form-group">
                        <textarea  name="descripcion" row="2" class="form-control" placeholder="Actualizar descripcion">
                            <?php echo $descripcion; ?>
                        </textarea>
                    </div><br>
                    <button class="btn btn-success" name="actualizar">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php") ?>