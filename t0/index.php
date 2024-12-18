
<!-- 
 Objetivo: enviar os dados do formulario para a rota /process.php enviando os dados via AJAX do Front
 para o Back e retornar a resposta do servidor para o front. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com AJAX</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>

    <form id="userForm">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="age">Idade:</label>
        <input type="number" id="age" name="age" required>
        <br>

        <button type="submit">Enviar</button>
    </form>

    <div id="result" style="margin-top: 20px; color: green;"></div>
</body>
</html>