document.addEventListener('DOMContentLoaded', function() {
  document.body.addEventListener('click', function() {
    const musica = document.getElementById('bgm');
    musica.volume = 0.1;
    musica.play();
  }, { once: true });
});

// Efeito de corações subindo ao enviar o formulário
document.getElementById('formulario').addEventListener('submit', function() {
  setInterval(criarCoracao, 500);
});

function criarCoracao() {
  const coracao = document.createElement('div');
  coracao.classList.add('coraçao');
  coracao.style.left = Math.random() * 100 + "vw";
  coracao.textContent = "❤️";
  document.body.appendChild(coracao);
  setTimeout(() => coracao.remove(), 6000);
}
