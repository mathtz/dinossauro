const cards = document.getElementById("container_cards");

const bnt_next = document.getElementById("next");
const bnt_prev = document.getElementById("prev");

const gap = 20;
const cards_visiveis = 3;

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

        // pega o primeiro card e coloca no final
        const primeiro = cards.firstElementChild;
        cards.appendChild(primeiro);

        // remove a animação temporariamente
        cards.style.transition = "none";
        cards.style.transform = "translateX(0)";

    });

});


// ANTERIOR
bnt_prev.addEventListener("click", function () {

    const largura = larguraCard();

    // pega o último card e coloca no começo
    const ultimo = cards.lastElementChild;

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
