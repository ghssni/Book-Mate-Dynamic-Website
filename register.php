<?php
include 'config.php';

if (isset($_POST['submit-register'])){
    $name = $_POST['registerName'];
    $username = $_POST['registerUsername'];
    $email = $_POST['registerEmail'];
    $password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, username,email, password) VALUES ('$name', '$username','$email', '$password')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Register Successfull";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
