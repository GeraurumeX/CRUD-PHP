<?php


    session_start();
    
    $conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
    );

    // Comprobar conexión a la bd
    /*
    if (isset($conn)) {
        echo 'DB is connected';
    }*/

    
?>