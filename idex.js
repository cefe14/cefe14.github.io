const barraOpciones = document.querySelector(".barra-opciones")
const barraMenu = document.querySelector(".barra-menu")

barraOpciones.addEventListener("click",() =>{
    barraMenu.classList.toggle("barra-menu_visible")

if (barraMenu.classList.contains("barra-menu_visible")) {
    barraOpciones.setAttribute("arial-label","cerrar menú");
} else {
    barraOpciones.setAttribute("arial-label", "abrir menú");
}
})