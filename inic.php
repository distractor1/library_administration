<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>
    <link rel="stylesheet" href="css/princpl.css">

    <style>
        body{
        background: url(img/prub.jpg);
        }
    </style>
</head>
<body>
    <a href="">
        <img class="icono" src="img/hessen icono.png">
    </a>
    <!--barra de menu de la pagina-->
    <ul class="menu">
        <li><a href="prestamo.php">PRESTAMO</a></li>
        <li><a href="registro.php">REGISTRO NUEVO</a></li>
        <li><a href="libros.php">LIBRO</a></li>
    </ul>
    <!--imagenes de uso para la pagina-->   
    <center style="margin-top: 100px;">
        <br><br><br><br><br></brz><div class="p10">
            <span style="--i:1;"><img src="img/a2.jpeg" alt=""></span>
            <span style="--i:2;"><img src="img/anatomia.jpeg" alt=""></span>
            <span style="--i:3;"><img src="img/cancer.jpeg" alt=""></span>
            <span style="--i:4;"><img src="img/clinica.jpeg" alt=""></span>
            <span style="--i:5;"><img src="img/conductas.jpeg" alt=""></span>
            <span style="--i:6;"><img src="img/HARRISON-MEDICINA-INTERNA.jpg" alt=""></span>
            <span style="--i:7;"><img src="img/psico.jpeg" alt=""></span>
            <span style="--i:8;"><img src="img/estetica.jpg" alt=""></span>
        </div>
    </center>
    <button id="salirBtn" class="salimos">Salir</button>
    <script>
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
    </script>
</body>
</html>
