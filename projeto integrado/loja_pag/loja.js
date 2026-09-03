const cards = document.getElementById("#container_cards");
const card = document.querySelector(".card");

const bnt_next = document.getElementById("#next");
const bnt_prev = document.getElementById("#prev");
let indice = 0;
const total_cards =document.querySelectorAll(".card").length;
const gap = 20;
const largura_card = card.offsetWidth + gap;
const cards_visiveis = 3;
 function mover_carrosel() {
    const largura_cards = card.offsetWidth + gap;
    cards.style.transform = `translateX(-${indice*largura_cards}px)`;
 }
 bnt_next.addEventListener("click",function(){
    if(indice<total_cards - 3){
        indice++
        mover_carrosel();
    }
 })

 bnt_prev.addEventListener("click",function(){
    if(indice<total_cards - 3){
        indice--
        mover_carrosel();
    }
 })