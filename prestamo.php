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
    </style>
    
</head>
<body>
        <!--buscador de la pagina-->
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
        <div class="subtitulos">DESCRIPCION</div>
        <div class="subtitulos">ESTADO</div>
        <div class="subtitulos">FECHA</div>
        <div class="subtitulos">DNI ESTUDIANTE</div>
        <div class="subtitulos">NOMBRE DEL ESTUDIANTE</div>
        <div class="subtitulos"><a href="prest_nuev.html"> <button type="button" class="a1">nuevo</button> </a></div>
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
    </div>
    <div id="myModal" class="modal">
                <div class="modal-content">
                    <p>¿Estás seguro de eliminar este libro?</p>
                    <button onclick="eliminarLibro1()">Sí</button>
                    <button onclick="cerrarModal1()">No</button>
                </div>
            </div>
    <script>
        var idEliminar1; // Variable para almacenar el ID a eliminar
            function mostrarModal(id_prest) {
            idEliminar1 = id_prest; // Almacena el ID a eliminar
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            }

            function cerrarModal1() {
                var modal = document.getElementById("myModal");
                modal.style.display = "none";
            }

            function eliminarLibro1() {
            // Redirige al script de eliminación
            window.location.href = "eliminacion.php?id=" + idEliminar1;
            }
    </script>    

</body>
</html>

