<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRO</title>
    <link rel="stylesheet" href="css/buscador.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/tabla.css">
    <style>
        /* Estilos CSS para el botón "Mostrar todos" */
        .mostrar-todos {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            position: absolute;
            right: 100px;
            top: 20px;

        }
        body{
            background: url(img/fond.jpg);
        }
        /* estilo d ela modal (ventana de advertencia)*/
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .modal-content {
            background-color: #fff;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        /*estilo de la imagen hessen icono*/
        .icono{
            width: 100px;
            height: 130px;
            margin-left: 12px;
            margin-top: -90px; /*cambiar valor para ajustar la pocicion*/
            float: left;
        }
        .a1 {
            background-color:white; /* Cambia el color de fondo a tu preferencia */
            color: black; /* Cambia el color del texto a tu preferencia */
            padding: 10px 10px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        /* Estilo para la clase "a2" */
        .a2 {
            background-color: #f57573; /* Cambia el color de fondo a tu preferencia */
            color: white; /* Cambia el color del texto a tu preferencia */
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .subtitulos, .informacion {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #000000; /* Agrega bordes a las celdas */
            padding: 4px; /* Añade un poco de espacio dentro de las celdas */
        }

        .subtitulos {
            font-weight: bold;
            font-size: 1.5em;
            background-color: hsl(209, 93%, 53%); /* Cambia el color de fondo de los títulos de columna */
        }

       
    </style>
    <script>
        // JavaScript para redirigir al botón Atrás
        window.onpopstate = function(event) {
            if (document.referrer.indexOf("prest_nuev.php") !== -1) {
                window.location.href = "prest_nuev.php";
            }
        };
    </script>
    
</head>
<body>
<body>
    <a href="inic.php">
        <img class="icono" src="img/hessen icono.png">
    </a>
    <!-- Buscador de la página -->
    <div class="buscad">
        <form method="GET" action="">
            <input type="text" name="search" placeholder="buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
        </form>
    </div>
       <?php if (isset($_GET['search'])) { ?>
        <a class="mostrar-todos" href="?"><button>Mostrar todos</button></a>
        <?php } ?>

    <?php
    include("conex_prest.php");
    
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    if ($search) {
        $prestamo = "SELECT * FROM prestamo WHERE 
                 titulo1 LIKE '%$search%'";
     
    } else {
        $prestamo = "SELECT * FROM prestamo";
    }
    ?>

    
    <div class="tabla_general">

        <div class="subtitulos">ID</div>
        <div class="subtitulos">TITULO</div>
        <div class="subtitulos">AUTOR</div>
        <div class="subtitulos">SECCION</div>
        <div class="subtitulos">ESTADO</div>
        <div class="subtitulos">FECHA</div>
        <div class="subtitulos">DNI </div>
        <div class="subtitulos">ESTUDIANTE</div>
        <div class="subtitulos"><a href="prest_nuev.php"> <button type="button" class="a1">nuevo</button> </a></div>
        <?php 
        $result = mysqli_query($conex1, $prestamo);
        while($row=mysqli_fetch_assoc($result)) {?>
        <div class="informacion"><?php  echo $row["id_prest"];?></div>
        <div class="informacion"><?php  echo $row["titulo1"];?></div>
        <div class="informacion"><?php  echo $row["autor1"];?></div>
        <div class="informacion"><?php  echo $row["descripcion1"];?></div>
        <div class="informacion"><?php  echo $row["estado"];?></div>
        <div class="informacion"><?php  echo $row["fecha"];?></div>
        <div class="informacion"><?php  echo $row["dni_est"];?></div>
        <div class="informacion"><?php  echo $row["nombre"];?></div>
        <div class="informacion">
        <button type="button" class="a2" onclick="mostrarModal(<?php echo $row["id_prest"]; ?>)">eliminar</button>
        </div>
    <?php } ?>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>¿Estás seguro de eliminar este libro?</p>
            <button onclick="eliminarLibro1()">Sí</button>
            <button onclick="cerrarModal1()">No</button>
        </div>
    </div>
    <script src="js/aler_prest-elim.js">
    </script>

</body>
</html>

