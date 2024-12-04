document.addEventListener("DOMContentLoaded", function () {
    const djButton = document.getElementById("djButton"); // Botón DJ
    const negocioButton = document.getElementById("negocioButton"); // Botón Negocio
    const formulario = document.querySelector("form"); // Formulario principal
    const articlePrimero = document.getElementById("primero"); // Article con id primero

    const hiddenElements = document.querySelectorAll(".hidden");
    const excludeForDj = ["aforo", "direccion", "tipo_local"]; // IDs a excluir para DJ

    // Función para cambiar clases
    const toggleClasses = (exclude = []) => {
        hiddenElements.forEach(element => {
            const id = element.querySelector("input, select")?.id || element.querySelector("label")?.htmlFor;
            if (exclude.includes(id)) {
                element.classList.add("hidden");
                element.classList.remove("mostrar");
            } else {
                element.classList.add("mostrar");
                element.classList.remove("hidden");
            }
        });
    };

    // Función para añadir o actualizar el input oculto tipo_anuncio
    const setTipoAnuncio = (value) => {
        // Eliminar cualquier input previo de tipo_anuncio dentro del article
        const existingInput = articlePrimero.querySelector(`input[name="tipo_anuncio"]`);
        if (existingInput) {
            existingInput.remove();
        }

        // Crear el nuevo input
        const hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = "tipo_anuncio";
        hiddenInput.id = "tipo_anuncio";
        hiddenInput.value = value;

        // Añadir al artículo "primero"
        articlePrimero.appendChild(hiddenInput);
    };

    // Manejar clic en botón DJ
    djButton.addEventListener("click", () => {
        toggleClasses(excludeForDj);
        setTipoAnuncio("Dj"); // Añadir input oculto para DJ
    });

    // Manejar clic en botón Negocio
    negocioButton.addEventListener("click", () => {
        toggleClasses(); // No exclusiones
        setTipoAnuncio("Negocio"); // Añadir input oculto para Negocio
    });
});
