<?php include("db.php"); ?>
<?php include("include/header.php")?>
<br>
<?php echo $_SESSION['idU']; ?>
<div class="container" p-4>
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <strong> <?=$_SESSION['message']?> </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="card card-body">
                <form action="savedb.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="Nombre" class="form-control"
                        placeholder="Nombre" autofocus>
                    </div><br>
                    <div class="form-group">
                        <input type="number" name="Numero" class="form-control"
                        placeholder="Numero" autofocus>
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="Descripcion" class="form-control"
                        placeholder="Descripcion" autofocus>
                    </div><br>
                    <input type="submit" class="btn btn-success btn-block"
                    name="Guardar" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
                <table class="table table-success table-striped">
                    <thead>
                        <th>
                            Nombre
                        </th>
                        <th>
                            numero
                        </th>
                        <th>
                            descripcion
                        </th>
                        <th>
                            Acciones
                        </th>
                    </thead>
                    <tbody>
                        <?php
                            $idU =$_SESSION['idU'];
                            $query = "SELECT *  FROM contacto WHERE iduser = $idU";
                            $result_contacto = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result_contacto)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['numero'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['descripcion'] ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                        <i class="fa-solid fa-broom-ball"></i>
                                        </a>
                                        <a href="delete.php?id=<?php echo $row['id']?>" class ="btn btn-danger">
                                        <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                        <?php   } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php include("include/footer.php")?>

