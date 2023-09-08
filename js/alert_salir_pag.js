document.getElementById("salirBtn").addEventListener("click", function() {
    // Crea una div para la alerta
    var alertDiv = document.createElement("div");
    alertDiv.className = "confirmation-alert";

    // Crea el contenido de la alerta
    var confirmationMessage = document.createElement("p");
    confirmationMessage.textContent = "¿Estás seguro de que deseas salir?";
    confirmationMessage.style.fontSize = "18px"; // Ajusta el tamaño del texto si es necesario

    // Crea botones para confirmar o cancelar
    var confirmButton = document.createElement("button");
    confirmButton.textContent = "Aceptar";
    confirmButton.className = "accept-button"; 
    confirmButton.addEventListener("click", function() {
        window.location.href = "index.html"; 
        alertDiv.remove(); // Eliminar la alerta después de la redirección
    });

    var cancelButton = document.createElement("button");
    cancelButton.textContent = "Cancelar";
    cancelButton.className = "cancel-button"; // Asigna la clase cancel-button
    cancelButton.addEventListener("click", function() {
        alertDiv.remove(); // Elimina la alerta si se hace clic en Cancelar
    });

    // Agrega elementos a la div de la alerta
    alertDiv.appendChild(confirmationMessage);
    alertDiv.appendChild(confirmButton);
    alertDiv.appendChild(cancelButton);

    // Agrega el div de la alerta al cuerpo del documento
    document.body.appendChild(alertDiv);
});