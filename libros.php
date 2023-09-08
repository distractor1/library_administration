<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRO</title>
    <link rel="stylesheet" href="css/buscador.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/tab_libr.css">
    <style>
         .restablecimiento {
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
        /*estilo de la imagen hessen icono*/
        .icono{
            width: 100px;
            height: 130px;
            margin-left: 12px;
            margin-top: -90px; /*cambiar valor para ajustar la pocicion*/
            float: left;
        }
        </style>
</head>
<body>
        <a href="inic.php">
        <img class="icono" src="img/hessen icono.png">
        </a>
        <!--buscador de la pagina-->
        <div class="buscad">
            <form method="GET" action="">
            <input type="text" name="search1" placeholder="buscar">
            <div class="btn">
                <i class="fa fa-search"></i>
            </div>
            </form>
       </div>
       <?php if (isset($_GET['search1'])) { ?>
        <a class="restablecimiento" href="?"><button>Mostrar todos</button></a>
        <?php } ?>

        <?php
            include("mostrar_dt.php");
    
            $search1 = isset($_GET['search1']) ? $_GET['search1'] : '';
            if ($search1) {
                $consulta = "SELECT * FROM libro WHERE 
                    titulo LIKE '%$search1%'";
     
            } else {
            $consulta = "SELECT * FROM libro";
            }
        ?> 
            <div class="tabla_libros">
                    <div class="titulos">ID</div>
                    <div class="titulos">TITULO</div>
                    <div class="titulos">AUTOR</div>
                    <div class="titulos">DESCRIPCION</div>
                    <div class="titulos">ELIMINAR</div>
                    <?php  $resultado= mysqli_query($conex, $consulta);
                    while($row=mysqli_fetch_assoc($resultado)) {?>
                    <div class="dato "><?php  echo $row["id"];?></div>
                    <div class="dato"><?php  echo $row["titulo"];?></div>
                    <div class="dato"><?php  echo $row["autor"];?></div>
                    <div class="dato"><?php  echo $row["descripcion"];?></div>
                    <div class="dato">
                    <button type="button" class="lib_a2" onclick="mostrarModal(<?php echo $row["id"]; ?>)">eliminar</button>
                    </div>
               <?php } ?> 
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <p>¿Estás seguro de eliminar este libro?</p>
                    <button onclick="eliminarLibro()">Sí</button>
                    <button onclick="cerrarModal()">No</button>
                </div>
            </div>
            <script src="js/alert_elim_lib1.js">
            </script>    
</body>
</html>
