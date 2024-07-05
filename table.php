<?php
include 'config.php';

// SQL untuk membuat tabel
$sql = "CREATE TABLE form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    messages TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Eksekusi query untuk membuat tabel
if ($koneksi->query($sql) === TRUE) {
    echo "Table 'form' created successfully";
} else {
    echo "Error creating table: " . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
