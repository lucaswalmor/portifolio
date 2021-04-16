
var entidade = document.getElementById('imagem');

// Altere o número para a apliação/redução desejada
var fator_lupa = 9;

entidade.onmouseover = function () {
    this.style.width = (this.clientWidth * fator_lupa) + "px";
};

entidade.onmouseout = function () {
    this.style.width = (this.clientWidth / fator_lupa) + "px";
};
