<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter | Cadastro</title>
</head>
<body>
    <form action="/correntista/cadastro/save" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="number" name="cpf" placeholder="CPF" maxlength="11" minlength="11">
        <input type="email" name="email" placeholder="Email">
        <input type="date" name="data_nasc">
        <input type="password" name="senha" placeholder="Senha">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>