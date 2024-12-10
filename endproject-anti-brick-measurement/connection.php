<?php

$host = "HAMMAM-LAP"; // Nama host SQL Server Anda
$database = "SharedDB"; // Nama database yang akan digunakan
$user = ""; // Kosongkan karena menggunakan Windows Authentication
$password = ""; // Kosongkan karena menggunakan Windows Authentication

// Koneksi info array
$connInfo = array(
    "Database" => $database,
    "UID" => "", // Kosongkan karena Windows Authentication
    "PWD" => "", // Kosongkan karena Windows Authentication
    "CharacterSet" => "UTF-8" // Opsional untuk encoding karakter
);

try {
    // DSN for connecting to SQL Server
    $dsn = "sqlsrv:Server=$host;Database=$database";

    // Create PDO instance
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful.<br/>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
