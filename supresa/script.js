// Quando a página carregar totalmente
document.addEventListener('DOMContentLoaded', function() {
  
  // Aguarda o primeiro clique em qualquer lugar da tela para tocar a música
  document.body.addEventListener('click', function() {
    const musica = document.getElementById('bgm');
    musica.volume = 0.1; // Volume baixinho
    musica.play();
  }, { once: true }); // Só no primeiro clique

});

// Controle do formulário de perguntas
document.getElementById('formulario').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Esconde as perguntas
  document.getElementById('perguntas').classList.add('escondido');
  
  // Mostra a mensagem final
  document.getElementById('mensagem-final').classList.remove('escondido');

  // Começa os corações subindo
  setInterval(criarCoracao, 500);
});

// Função que cria corações subindo
function criarCoracao() {
  const coracao = document.createElement('div');
  coracao.classList.add('coraçao');
  coracao.style.left = Math.random() * 100 + "vw";
  coracao.textContent = "❤️";
  document.body.appendChild(coracao);
  setTimeout(() => coracao.remove(), 6000);
}
