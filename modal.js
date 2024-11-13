
// Seleciona os elementos
const comprarBtn = document.getElementById('comprarBtn');
const modalConfirmacao = document.getElementById('modalConfirmacao');
const confirmarBtn = document.getElementById('confirmarBtn');
const cancelarBtn = document.getElementById('cancelarBtn');

// Função para mostrar o modal
comprarBtn.onclick = function (event) {
  event.preventDefault(); // Evita que a página role para o topo
  modalConfirmacao.style.display = 'flex';
};

// Função para confirmar a compra e redirecionar para o WhatsApp
confirmarBtn.onclick = function () {
  const mensagem = encodeURIComponent("Olá, gostaria de comprar este produto.");
  const numeroWhatsapp = "5511999999999"; // Substitua pelo seu número do WhatsApp com código do país
  window.location.href = `https://wa.me/${numeroWhatsapp}?text=${mensagem}`;
};

// Função para cancelar e fechar o modal
cancelarBtn.onclick = function () {
  modalConfirmacao.style.display = 'none';
};

// Fechar o modal ao clicar fora dele
window.onclick = function (event) {
  if (event.target === modalConfirmacao) {
    modalConfirmacao.style.display = 'none';
  }
};

