const area = {
  1: {
    titulo: "lorem1",
    descricao: "descrição 1",
    info1: "informação 1",
    info2: "informação 2",
    info3: "informação 4",
    info4: "informação 4",
    imagem: "../homepag/imagens/teste.png",
  },
  2: {
    titulo: "lorem2",
    descricao: "descrição 2",
    info1: "informação 1",
    info2: "informação 2",
    info3: "informação 4",
    info4: "informação 4",
    imagem: "../homepag/imagens/logo_principal.png",
  },
  3: {
    titulo: "lorem3",
    descricao: "descrição 3",
    info1: "informação 1",
    info2: "informação 2",
    info3: "informação 4",
    info4: "informação 4",
    imagem: "../homepag/imagens/teste.png",
  },
  4: {
    titulo: "lorem4",
    descricao: "descrição 4",
    info1: "informação 1",
    info2: "informação 2",
    info3: "informação 4",
    info4: "informação 4",
    imagem: "../homepag/imagens/teste.png",
  },
  5: {
    titulo: "lorem5",
    descricao: "descrição 5",
    info1: "informação 1",
    info2: "informação 2",
    info3: "informação 4",
    info4: "informação 4",
    imagem: "../homepag/imagens/teste.png",
  },
};

const botoes = document.querySelectorAll(".bnt_selecao");

const descricao = document.querySelector("#descricao_area");

const imagem = document.querySelector("#img_informacao");

const info1 = document.querySelector("#info1");
const info2 = document.querySelector("#info2");
const info3 = document.querySelector("#info3");
const info4 = document.querySelector("#info4");

botoes.forEach((botao) => {
  botao.addEventListener("click", () => {
    const areaSelecionada = botao.dataset.area;

    descricao.textContent = area[areaSelecionada].descricao;
    info1.textContent = area[areaSelecionada].info1;
    info2.textContent = area[areaSelecionada].info2;
    info3.textContent = area[areaSelecionada].info3;
    info4.textContent = area[areaSelecionada].info4;
    imagem.src = area[areaSelecionada].imagem;
  });
});
