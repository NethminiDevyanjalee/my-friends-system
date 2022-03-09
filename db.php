<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my-friends-system";

    $link = new mysqli($servername,$username,$password,$password);

    if(!$link){
        die("Database connection error:").mysqli_connect_error();
    }

?>
