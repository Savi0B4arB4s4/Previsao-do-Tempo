<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = strip_tags($_POST['nome']);
    $idade = strip_tags($_POST['idade']);
    $interesse = strip_tags($_POST['interesse']);
    $descricao = strip_tags($_POST['descricao']);
    $preparada = strip_tags($_POST['preparada']);

    $data = date('d/m/Y H:i:s');

    $linha = "Data: $data\nNome: $nome\nIdade: $idade\nInteresse: $interesse\nDescrição: $descricao\nPreparada: $preparada\n------------------------\n";

    file_put_contents('respostas.txt', $linha, FILE_APPEND | LOCK_EX);

    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
      <meta charset='UTF-8'>
      <title>🌹 Surpresa Final 🌹</title>
      <link rel='stylesheet' href='style.css'>
    </head>
    <body>
      <div class='caixa'>
        <h1>🌹 Para Ana Clara 🌹</h1>
        <p>
          Desde que te conheci, meu coração bate diferente...<br>
          Essa página é só pra te dizer...<br>
          Que você é especial pra mim de um jeito que eu não consigo explicar só com palavras. ❤️
        </p>
        <p>
          Obrigado por responder, Ana Clara!<br>
          Espero que goste desse pequeno gesto feito com carinho, só pra você... 💌
        </p>
        <a href='index.html' style='color: #fff; text-decoration: underline;'>Voltar para o início</a>
      </div>
      <audio id='bgm' autoplay loop>
        <source src='soft/musica.mp3' type='audio/mpeg'>
      </audio>
      <script>
        const musica = document.getElementById('bgm');
        musica.volume = 0.1;
      </script>
    </body>
    </html>";
} else {
    echo "Acesso inválido.";
}
?>
