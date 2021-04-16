<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tela4.css">
    <title>Login Transparent 2</title>
</head>
<body>
    
    <div class="button">
        <a href="/views/projetos/logins.php"><button type="submit">Voltar</button></a>
    </div>

    <div class="container">
        <form action="" method="post" autocomplete="off">
            <img src="avatar.png" alt="" class="avatar">
            <h1>Login</h1>
            <div class="box">
                <label for="">Login</label>
                <input type="text" name="nome" id="nome" placeholder="Usuário">
            </div>
            <div class="box">
                <label for="">Senha</label>
                <input type="password" name="password" id="password" placeholder="Senha">
            </div>
            <input type="submit" name="Enviar" value="Login">
            <a href="#">Esqueci minha senha</a>
        </form>
    </div>
</body>
</html>