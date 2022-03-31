<?php
    session_start();
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_base_datos'
    );

    // if (isset($conn)) {
    //     echo("base de datos conectada");
    // }
?>