<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter | Login</title>
</head>
<body>
    <form action="/login/auth" method="post">
        <input type="number" name="cpf" placeholder="CPF">
        <input type="password" name="senha" placeholder="Senha">

        <button type="submit">Login</button>
    </form>

    <br><br>

    <button onclick="document.location='/correntista/cadastro'">Cadastre-se</button>
</body>
</html>