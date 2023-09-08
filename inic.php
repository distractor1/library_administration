<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>

    <style>
        /* diseño general de la pagina*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* diseño de la estructura*/
        body {
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(img/prub.jpg);
            background-size: cover;
        }
        /* diseño del menu genral*/
        .menu li a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            padding: 20px;
            display: block;
            font-size: 20px;
        }

        .menu li {
            display: inline-block;
            text-align: center;
        }

        .menu li a:hover {
            background: #8ac0ce;
        }
        /*dieño de la anamcion de apertura*/
        .p10 {
            position: relative;
            width: 200px;
            height: 200px;
            transform-style: preserve-3d;
            animation: animate 20s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: perspective(1000px) rotateY(0deg);
            }
            100% {
                transform: perspective(1000px) rotateY(360deg);
            }
        }

        .p10 span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-origin: center;
            transform-style: preserve-3d;
            transform: rotateY(calc(var(--i)* 45deg)) translateZ(400px);
            -webkit-box-reflect: below 0px linear-gradient(transparent, transparent, #0004);
        }

        .p10 span img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .icono {
        width: 100px;
        height: 130px;
        position: absolute;
        top: 20px;
        right: 20px;
        }
        /* Estilos para centrar la alerta y hacerla más grande */
        .confirmation-alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        width: 400px; /* Ancho deseado */
        height: 100px; /* Altura deseada */
        padding: 20px;
        border: 1px solid #ccc;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        text-align: center;
        border-radius: 10px;
        }

        /* Estilos para los botones */
        .confirmation-alert button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .confirmation-alert button.accept-button {
            background-color: #4CAF50;
            color: white;
        }

        .confirmation-alert button.cancel-button {
        background-color: #f44336;
        color: white;
        }
        .salimos{
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 150px; /* Ancho deseado */
            height: 50px; /* Altura deseada */
            font-size: 18px; /* Tamaño del texto */
            background-color:#f44336;
            color: white;
            border: 2px solid transparent; /* Establece un borde inicialmente transparente */
            transition: border-color 0.3s ease; /* Agrega una transición de animación a la propiedad border-color */
        }
        .salimos:hover {
         border-color: white; /* Cambia el color del borde al pasar el mouse sobre el botón */
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
