<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <title>Tela Principal</title>
</head>
<body>  
    <img src="img/logo-siga.png" alt="Logo Siga" srcset="Logo Siga" class="logo-siga">
    <form action="authentication.php" method="post">
        <label for="usuario">Usuário:</label><br>
        <input type="text" name="login" id="login" placeholder="Digite seu CPF" required><br><br>
        <label for="usuario">Senha:</label><br>
        <input type="text" name="senha" id="senha" placeholder="Senha" required><br>
        <a href="recuperar-senha.php" id="rec-senha">Esqueceu sua senha ?</a><br><br>
        <button type="submit">Entrar</button>
    </form>
    <a href="recuperar-acesso.php" id="rec-acesso">Problemas com acesso ?</a>
</body>
</html>



