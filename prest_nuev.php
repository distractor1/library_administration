<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prestamo nuevo</title>
    <link rel="stylesheet" href="css/est_nuev_prest.css">
    <link rel="stylesheet" href="css/ventana3_prest.css">
    <style>
        body {
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

        #fecha {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        #dni_est {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .icono{
            width: 100px;
            height: 130px;
            margin-left: 20px;
            margin-top: 0px; /*cambiar valor para ajustar la pocicion*/
            float: left;
        }
    </style>
</head>
<body>
    <a href="inic.php">
        <img class="icono" src="img/hessen icono.png">
    </a>
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

        <!-- Otros campos relevantes para el registro del libro -->

        <button type="submit" name="insertar">Registrar Libro</button>
    </form>

    <div class="overlay1" id="overlay1"></div>

    <!-- Alerta de éxito -->
    <div id="alertaExito" class="alert-container">
        <div class="alert-text">
            Prestamo registrado con exito.
        </div>
        <button class="alert-button" onclick="cerrarAlerta('alertaExito')">Aceptar</button>
    </div>
    <!-- Alerta de error -->
    <div id="alertaError" class="alert-container">
        <div class="alert-text">
            Error al registrar el prestamo.
        </div>
        <button class="alert-button" onclick="cerrarAlerta('alertaError')">Aceptar</button>
    </div>

    <script src="js/aler_prest_nuev.js">
    </script>
</body>
</html>