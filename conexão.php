<?php
$servername = "localhost";
$username = "marcoscoutinho";
$password = "marcos242714.";
$dbname = "adega";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida com o banco de dados!";
?>
