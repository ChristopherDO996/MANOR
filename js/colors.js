const selectElement = document.querySelector("#colores");

selectElement.addEventListener("change", (event) => {
  //const resultado = document.querySelector(".ovalo");
  //resultado.sty = `Te gusta el sabor ${event.target.value}`;
  const color = `${event.target.value}`;
  const resultado = document.querySelector(".ovalo");
  resultado.style.background = color;
});
