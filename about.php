<?php
    $con = mysqli_connect('localhost', 'root');

    if($con) {
        echo "Connection Successful";
    }
    else {
        echo "ERROR";
    }

    mysqli_select_db($con, 'tasprop');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$name', '$email', '$number')";

    mysqli_query($con, $query);
    header('location:index.php#contacto');
    
?>