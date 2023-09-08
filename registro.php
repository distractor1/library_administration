<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Nuevo Libro</title>
    <link rel="stylesheet" href="css/ventana2_lib.css">
    <link rel="stylesheet" href="css/regist_principl.css">
    <style>
        body {
            background: url(img/fond.jpg);
        }
    </style>
</head>
<body>
    <a href="inic.php">
        <img class="icono" src="img/hessen icono.png">
    </a>
    <!-- Estructura de la página -->
    <h1>Registro Nuevo Libro</h1>
    <form action="db.php" method="post">
        <label for="titulo">Título del Libro:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

        <button type="submit" name="registro">Registrar Libro</button>
    </form>

    <div class="overlay" id="overlay"></div>

    <!-- Alerta de éxito -->
    <div id="alertaExito" class="alert-container">
        <div class="alert-text">
            Libro registrado con éxito.
        </div>
        <button class="alert-button" onclick="cerrarAlerta('alertaExito')">Aceptar</button>
    </div>

    <!-- Alerta de error -->
    <div id="alertaError" class="alert-container">
        <div class="alert-text">
            Error al registrar el libro.
        </div>
        <button class="alert-button" onclick="cerrarAlerta('alertaError')">Aceptar</button>
    </div>

    <script>
        function mostrarAlerta() {
            var parametro = new URLSearchParams(window.location.search);
            var alerta = parametro.get("alerta");

            if (alerta === "exito") {
                // Mostrar alerta de éxito y fondo transparente
                var alertaExito = document.getElementById("alertaExito");
                var overlay = document.getElementById("overlay");
                alertaExito.style.display = "block";
                overlay.style.display = "block";
            } else if (alerta === "error") {
                // Mostrar alerta de error y fondo transparente
                var alertaError = document.getElementById("alertaError");
                var overlay = document.getElementById("overlay");
                alertaError.style.display = "block";
                overlay.style.display = "block";
            }
        }

        function cerrarAlerta(id) {
            var alerta = document.getElementById(id);
            var overlay = document.getElementById("overlay");
            alerta.style.display = "none";
            overlay.style.display = "none";
        }

        window.onload = mostrarAlerta; // Mostrar la alerta al cargar la página
    </script>
</body>
</html>
