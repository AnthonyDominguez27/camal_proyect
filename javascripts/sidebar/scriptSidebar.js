// Función para mostrar/ocultar dropdowns
function toggleDropdown(event) {
    event.preventDefault(); // Evita el comportamiento por defecto del enlace
    const dropdown = this.nextElementSibling; // Selecciona el menú desplegable
    dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block"; // Alterna la visibilidad
}

document.getElementById("registros").addEventListener("click", toggleDropdown);
document.getElementById("consultas").addEventListener("click", toggleDropdown);
document.getElementById("reportes").addEventListener("click", toggleDropdown);

// Opcional: Cierra el menú si se hace clic fuera
document.addEventListener("click", function(event) {
    const dropdowns = document.querySelectorAll(".dropdown");
    dropdowns.forEach(dropdown => {
        if (!event.target.closest('.navbar')) {
            dropdown.style.display = "none"; // Oculta el menú si se hace clic fuera
        }
    });
});
