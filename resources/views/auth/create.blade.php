<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Enquete</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="CriarEnquete-container">
        <h1>Criação de Enquete</h1>
        <input type="text" placeholder="Título da Enquete" id="enquete-titulo">
        <br><br>
        <textarea placeholder="Descrição da Enquete" rows="4"></textarea>
        <br><br>
        <div id="opcoes">
            <input type="text" placeholder="Opção 1">
            <br><br>
            <input type="text" placeholder="Opção 2">
        </div>
        <br>
        <button onclick="addOption()">Adicionar Opção</button>
        <br><br>
        <button>Criar Enquete</button>
        <br><br>
        <p class="link-text">Quer responder enquetes? <a href="home.html">Clique aqui</a></p>
    </div>

    <script>
        function addOption() {
            var opcoesDiv = document.getElementById('opcoes');
            var novaOpcao = document.createElement('input');
            novaOpcao.type = 'text';
            novaOpcao.placeholder = 'Nova Opção';
            opcoesDiv.appendChild(novaOpcao);
            opcoesDiv.appendChild(document.createElement('br'));
            opcoesDiv.appendChild(document.createElement('br'));
        }
    </script>
</body>
</html>