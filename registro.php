<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Nuevo Libro</title>
    <link rel="stylesheet" href="css/ventana2_lib.css">
    <style>
        /* este el css del registro general----!!!!!!!

        el body es el disño general del apartado libro nuevo*/
        
        body {
            font-family: Arial, sans-serif;
            background-color: #cfbbbb;
            background: url(img/fond.jpg);
            margin: 0;
            padding: 0;
        }
        /* tiutlo de la pagina*/
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        /* diseño del cuadro general*/
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 45px;
   
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 15px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        /*diseño del boton*/
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!--estructura de la pagina-->
    <h1>Registro Nuevo Libro</h1>
    <form action="db.php" method="post">
        <label for="titulo">Título del Libro:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea>

        <!-- Agrega aquí otros campos relevantes para el registro del libro -->

        <button type="submit" name="registro">Registrar Libro</button>
    </form>
    <!-- Alerta de éxito -->
    <div id="alertaExito" class="alert alert-success" style="display: none;">
        Libro registrado con éxito.
        <button onclick="cerrarAlerta('alertaExito')">Cerrar</button>
    </div>

    <!-- Alerta de error -->
    <div id="alertaError" class="alert alert-error" style="display: none;">
        Error al registrar el libro.
        <button onclick="cerrarAlerta('alertaError')">Cerrar</button>
    </div>
    <script>
        function mostrarAlerta() {
        var parametro = new URLSearchParams(window.location.search);
        var alerta = parametro.get("alerta");

        if (alerta === "exito") {
            // Mostrar alerta de éxito
            var alertaExito = document.getElementById("alertaExito");
            alertaExito.style.display = "block";
        } else if (alerta === "error") {
            // Mostrar alerta de error
            var alertaError = document.getElementById("alertaError");
            alertaError.style.display = "block";
        }
    }

    function cerrarAlerta(id) {
        var alerta = document.getElementById(id);
        alerta.style.display = "none";
    }

    window.onload = mostrarAlerta; // Mostrar la alerta al cargar la página
    </script>
    <script>
    function mostrarAlerta() {
        var parametro = new URLSearchParams(window.location.search);
        var alerta = parametro.get("alerta");

        if (alerta === "exito") {
            // Mostrar alerta de éxito
            var alertaExito = document.getElementById("alertaExito");
            alertaExito.style.display = "block";
        } else if (alerta === "error") {
            // Mostrar alerta de error
            var alertaError = document.getElementById("alertaError");
            alertaError.style.display = "block";
        }
    }

    window.onload = mostrarAlerta; // Mostrar la alerta al cargar la página
</script>
</body>
</html>