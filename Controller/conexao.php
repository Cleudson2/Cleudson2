<?php
// Configurações do banco de dados
$dsn = 'mysql:host=localhost;dbname=sistema_igreja';
$username = 'root';
$password = '';

try {
    // Criando a conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$dns;charset=utf8", $username, $password);

    // Configurando o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Opcional: Definindo o modo de busca de dados como associativo (pode ser alterado conforme necessário)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Conexão bem-sucedida (opcionalmente, pode-se mostrar uma mensagem ou omitir essa parte)
    // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Caso ocorra um erro na conexão, captura a exceção e exibe uma mensagem
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    exit; // Encerra o script
}
?>
