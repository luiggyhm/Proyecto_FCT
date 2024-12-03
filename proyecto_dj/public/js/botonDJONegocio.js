document.addEventListener("DOMContentLoaded", function () {
    const djButton = document.getElementById("djButton"); // Botón DJ
    const negocioButton = document.getElementById("negocioButton"); // Botón Negocio

    const hiddenElements = document.querySelectorAll(".hidden");
    const excludeForDj = ["aforo", "direccion", "tipo_local"]; // IDs a excluir para DJ

    // Función para cambiar clases
    const toggleClasses = (exclude = []) => {
        hiddenElements.forEach(element => {
            const id = element.querySelector("input, select")?.id || element.querySelector("label")?.htmlFor;
            if (exclude.includes(id)) {
                // No cambia si está en la lista de exclusión
                element.classList.add("hidden");
                element.classList.remove("mostrar");
            } else {
                element.classList.add("mostrar");
                element.classList.remove("hidden");
            }
        });
    };

    // Manejar clic en botón DJ
    djButton.addEventListener("click", () => {
        toggleClasses(excludeForDj);
    });

    // Manejar clic en botón Negocio
    negocioButton.addEventListener("click", () => {
        toggleClasses(); // No exclusiones
    });
});
