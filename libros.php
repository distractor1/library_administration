<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRO</title>
    <link rel="stylesheet" href="buscador.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="tab_libr.css">
</head>
<body>
        <!--buscador de la pagina-->
        <div class="buscad">
        <input type="text" placeholder="buscar">
        <div class="btn">
            <i class="fa fa-search"></i>
        </div>
    </div>

    <?php
        include ("mostrar_dt.php");
        $consulta= "SELECT id,titulo,descripcion,autor FROM libro";
        ?> 
            <div class="tabla_libros">
                    <div class="titulos">ID</div>
                    <div class="titulos">TITULO</div>
                    <div class="titulos">AUTOR</div>
                    <div class="titulos">DESCRIPCION</div>
                    <?php  $resultado= mysqli_query($conex, $consulta);
                    while($row=mysqli_fetch_assoc($resultado)) {?>
                    <div class="dato"><?php  echo $row["id"];?></div>
                    <div class="dato"><?php  echo $row["titulo"];?></div>
                    <div class="dato"><?php  echo $row["autor"];?></div>
                    <div class="dato"><?php  echo $row["descripcion"];?></div>
               <?php } ?>
</body>
</html>
