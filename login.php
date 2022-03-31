<?php include("include/headerlogin.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="verificarUsuario.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="usuario""
                        class="form-control" placeholder="Usuario">
                    </div><br>
                    <div class="form-group">
                        <input type="text" name="contraseña"
                        class="form-control" placeholder="Contraseña">
                    </div><br>
                    <button class="btn btn-success" name="actualizar">
                        Ingresar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php")?>