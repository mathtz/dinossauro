document.addEventListener("DOMContentLoaded", () => {
  const painel = document.getElementById("painelLateral");
  const listaProdutos = document.getElementById("listaProdutos");

  // Corrigido: bnt -> btn (para bater com os escutadores abaixo)
  const btnConcluir = document.getElementById("btnConcluirCompra");
  const btnFechar = document.getElementById("btnFecharPainel");

  let produtosSelecionados = [];

  // 1. ABRIR E ADICIONAR PRODUTOS
  document.querySelectorAll(".btn-abrir-painel").forEach((botao) => {
    botao.addEventListener("click", (event) => {
      const card = event.target.closest(".card");
      const nome = card.getAttribute("data-nome");

      if (nome) {
        produtosSelecionados.push({ nome: nome });
        renderizarLista();
        painel.classList.add("aberto");
      }
    });
  });

  // 2. DESENHAR A LISTA NO PAINEL
  function renderizarLista() {
    listaProdutos.innerHTML = "";

    produtosSelecionados.forEach((produto) => {
      const li = document.createElement("li");
      li.className = "item-carrinho";
      li.innerHTML = `<span>${produto.nome}</span>`;
      listaProdutos.appendChild(li);
    });
  }

  // 3. FUNÇÃO ÚNICA PARA FECHAR E ZERAR A LISTA
  function fecharELimpar() {
    painel.classList.remove("aberto");
    setTimeout(() => {
      produtosSelecionados = [];
      listaProdutos.innerHTML = "";
    }, 300);
  }

  // 4. BOTÃO CONCLUIR COMPRA
  if (btnConcluir) {
    btnConcluir.addEventListener("click", () => {
      if (produtosSelecionados.length > 0) {
        alert("Sua compra será processada!");
        fecharELimpar(); // Corrigido: chama a função fecharELimpar
      } else {
        alert("Selecione pelo menos um produto!");
      }
    });
  }

  // 5. BOTÃO FECHAR E LIMPAR
  if (btnFechar) {
    btnFechar.addEventListener("click", () => {
      fecharELimpar(); // Corrigido: chama a função fecharELimpar
    });
  }
});
const carrosseis = document.querySelectorAll(".carrosel");

carrosseis.forEach(function (carrosel) {
  const cards = carrosel.querySelector(".container_cards");

  const bnt_next = carrosel.querySelector(".next");
  const bnt_prev = carrosel.querySelector(".prev");

  const gap = 20;

  function larguraCard() {
    return cards.querySelector(".card").offsetWidth + gap;
  }

  // PRÓXIMO
  bnt_next.addEventListener("click", function () {
    const largura = larguraCard();

    // anima para a esquerda
    cards.style.transition = "transform 0.3s ease";
    cards.style.transform = `translateX(-${largura}px)`;

    // depois da animação
    cards.addEventListener("transitionend", function mover() {
      cards.removeEventListener("transitionend", mover);

      // pega o primeiro card
      const primeiro = cards.firstElementChild;

      // coloca no final
      cards.appendChild(primeiro);

      // remove a animação temporariamente
      cards.style.transition = "none";
      cards.style.transform = "translateX(0)";
    });
  });

  // ANTERIOR
  bnt_prev.addEventListener("click", function () {
    const largura = larguraCard();

    // pega o último card
    const ultimo = cards.lastElementChild;

    // coloca no começo
    cards.prepend(ultimo);

    // começa deslocado para a esquerda
    cards.style.transition = "none";
    cards.style.transform = `translateX(-${largura}px)`;

    // força o navegador a atualizar
    cards.offsetHeight;

    // anima para a posição normal
    cards.style.transition = "transform 0.3s ease";
    cards.style.transform = "translateX(0)";
  });
});
