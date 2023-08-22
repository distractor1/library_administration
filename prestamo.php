<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRO</title>
    <link rel="stylesheet" href="buscador.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="tabla.css">
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
    $inc1 = include ("conex_prest.php");
    if($inc1){
        $consulta= "SELECT * FROM prestamo";
        $result=  mysqli_query($conex1,$consulta);
        if ($result){
            while($row= $result->fetch_array()){
                $id_prest = $row['id_prest'];
                $titulo1 = $row['titulo1'];
                $autor1= $row['autor1'];
                $descripcion1 = $row['descripcion1'];
                $estado = $row['estado'];
                $fecha = $row['fecha'];
                $dni_est = $row['dni_est'];
                $nombre = $row['nombre'];
                
                ?> 
            <div class="tabla">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>AUTOR</th>
                            <th>DESCRIPCION</th>
                            <th>ESTADO</th>
                            <th>FECHA</th>
                            <th>DNI_EST</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row [$id_prest]; ?></td>
                            <td><?php echo $row [$titulo1]; ?></td>
                            <td><?php echo $autor1; ?></td>
                            <td><?php echo $descripcion1; ?></td>
                            <td><?php echo $estado; ?></td>
                            <td><?php echo $fecha; ?></td>
                            <td><?php echo $dni_est; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <?php
            }
        }
    }
    ?>
</body>
</html>
