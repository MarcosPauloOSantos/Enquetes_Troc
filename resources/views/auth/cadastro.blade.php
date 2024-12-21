<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="login-container">
        <h1>CADASTRO</h1>
        <form action="{{ route('cadastro.post') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome Completo" required>
    <br><br>
    <input type="email" name="email" placeholder="E-mail" required>
    <br><br>
    <input type="password" name="password" placeholder="Senha" required>
    <br><br>
    <button type="submit">Cadastrar</button>
</form>

        <br><br>
        <p class="link-text">Já tem uma conta? <a href="{{ route('login') }}">Faça login aqui</a></p>
    </div>
</body>
</html>
