<?php
include 'config.php';

if (isset($_POST['submit-form'])) {
    $nama = $_POST['formName'];
    $email = $_POST['formEmail'];
    $messages = $_POST['formMessage'];

    $sql = "INSERT INTO form (nama, email, messages) VALUES ('$nama', '$email', '$messages')";

    if ($koneksi->query($sql) === TRUE) {
        echo "Message Successfull Send!";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
        // echo "Failed to Send The Message!";
    }

    $koneksi->close();

}
?>