<?php
// Iniciar a sessão
session_start();
// include '..\Controller\conexao.php';
$dsn = 'mysql:host=localhost;dbname=sistema_igreja';
$username = 'root';
$password = '';


try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificando se os dados do formulário foram enviados
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Sanitização básica dos dados recebidos
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        // Consulta para encontrar o usuário pelo CPF
        $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

       

        // Verificando a senha
        if ($user && password_verify($senha, $user['senha'])) {
            // Armazenando informações do usuário na sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];

            // Redireciona para uma página interna após o login
            header("Location: ..\View\pagina1.php");
            exit; // Garante que o código posterior não seja executado
        } else {
                echo "erro";
            }
    }
} catch (PDOException $e) {
    // Log de erro e mensagem genérica ao usuário
    error_log($e->getMessage(), 0); // Registra o erro no log do servidor
    echo "'Erro ao conectar ao banco de dados. Tente novamente mais tarde.'";
}
?>