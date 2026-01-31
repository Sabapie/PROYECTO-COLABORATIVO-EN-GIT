// js/main.js - Interacción mínima para el Reto 3.1

document.addEventListener("DOMContentLoaded", () => {
    const boton = document.getElementById("btn-entendido");
    const mensaje = document.getElementById("mensaje-confirmacion");

    if (!boton || !mensaje) return;

    boton.addEventListener("click", () => {
        mensaje.textContent = "Perfecto, ya puedes empezar a romper ramas y solucionarlo con Git 😄";
        mensaje.classList.remove("hidden");
    });
});
