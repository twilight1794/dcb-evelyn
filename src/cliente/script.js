"use strict"

function cambiarPagina() {
    let pagina = document.location.hash.substring(1);
    if (pagina == "") pagina = "inicio"
    let p = document.getElementById("p_"+pagina);
    if (p){
        for (let i of document.getElementsByClassName("pagina")){
            i.classList.remove("pagina_activa");
            if (i.id == p.id) i.classList.add("pagina_activa");
        }
    } else console.error(pagina + " no existe!");
}

window.addEventListener("popstate", cambiarPagina);

document.addEventListener("DOMContentLoaded", function() {
    cambiarPagina();
    M.Sidenav.init(document.getElementById("mobile-nav"));
    Array.from(document.getElementsByTagName("select")).forEach(e => M.FormSelect.init(e));
    Array.from(document.getElementsByClassName("materialboxed")).forEach(e => M.Materialbox.init(e));
});
