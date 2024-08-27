
<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "sistema_igreja");

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>