<?php
$host = "localhost";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=myDB", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>