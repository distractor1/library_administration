<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prestamo nuevo</title>
    <link rel="stylesheet" href="css/est_nuev_prest.css">
    <link rel="stylesheet" href="css/ventana3_prest.css">
    <style>
        body{
            background: url(img/fond.jpg);
        }
        /* Alerta de éxito y error */
        .alert-container {
            display: none;
        }

        .alert-text {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        #fecha      {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        #dni_est     {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 10px;
        }

        </style>
</head>
<body>
      <!--estructura de la pagina-->
      <h1>NUEVO PRESTAMO</h1>
    <form action="nuev_prest.php" method="post">
        <label for="titulo1">Título del Libro:</label>
        <input type="text" id="titulo1" name="titulo1" required>

        <label for="autor1">Autor:</label>
        <input type="text" id="autor1" name="autor1" required>

        <label for="descripcion1">Descripción:</label>
        <textarea id="descripcion1" name="descripcion1" rows="8" required></textarea>
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="dni_est">DNI del estudiante:</label>
        <input type="number" id="dni_est" name="dni_est" required>

        <label for="nombre">Nombre del estudiante:</label>
        <input type="text" id="nombre" name="nombre" required>

        <!-- Agrega aquí otros campos relevantes para el registro del libro -->

        <button type="submit" name="insertar">Registrar Libro</button>
    </form>

    <div class="overlay1" id="overlay1"></div>

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

function mostrarAlerta() {
    var parametro = new URLSearchParams(window.location.search);
    var alerta = parametro.get("alerta");

    if (alerta === "exito") {
        // Mostrar alerta de éxito y fondo transparente
        var alertaExito = document.getElementById("alertaExito");
        var overlay1 = document.getElementById("overlay1");
        alertaExito.style.display = "block";
        overlay1.style.display = "block";
    } else if (alerta === "error") {
        // Mostrar alerta de error y fondo transparente
        var alertaError = document.getElementById("alertaError");
        var overlay1 = document.getElementById("overlay1");
        alertaError.style.display = "block";
        overlay1.style.display = "block";
    }
}

// Call the mostrarAlerta function to display alerts only when necessary
mostrarAlerta();

        function cerrarAlerta(id) {
            var alerta = document.getElementById(id);
            var overlay1 = document.getElementById("overlay1");
            alerta.style.display = "none";
            overlay1.style.display = "none";
        }

        window.onload = mostrarAlerta; // Mostrar la alerta al cargar la página
    </script>

</body>
</html>