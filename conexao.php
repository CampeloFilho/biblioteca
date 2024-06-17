<?php
$HOST = 'localhost';
$USER = 'root';
$PASS = '';
$BASE = 'biblioteca';

$conn = new mysqli($HOST, $USER, $PASS, $BASE);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
