<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>IEADEB</title>
    <link rel="stylesheet" href="View\Css\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <script src="View\Js\mascaraCpf.js"></script> -->
</head>
<body>
    <div class="page">
        <form method="POST" action="model\validacao.php" class="formLogin">
 
            <h1>IEADEB</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="CPF">CPF</label>
            <input type="text" placeholder="000.000.000-00" id="cpf" name="cpf" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha"  id="senha"/> 
    
            
            <a href="#">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
    
</body>
</html>