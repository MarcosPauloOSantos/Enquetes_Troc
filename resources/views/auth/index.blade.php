<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Login</title>
</head>
<body>
    <div>
        <h1>LOGIN</h1>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="E-mail" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
        <p class="link-text">Não tem uma conta? <a href="{{ route('cadastro') }}">Cadastre-se aqui</a></p>
    </div>
</body>
</html>