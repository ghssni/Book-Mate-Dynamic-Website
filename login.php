<?php
include 'config.php';

if (isset($_POST['submit-login'])) {
    $email = $_POST['loginName'];
    $password = $_POST['loginPassword'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $koneksi->close();
}
?>
