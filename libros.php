<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRO</title>
    <link rel="stylesheet" href="buscador.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
    $inc = include ("mostrar_dt.php");
    if($inc){
        $consulta= "SELECT id,titulo,descripcion,autor FROM libro";
        $result=  mysqli_query($conex,$consulta);
        if ($result){
            while($row= $result->fetch_array()){
                $id = $row['id'];
                $titulo = $row['titulo'];
                $descripcion = $row['descripcion'];
                $autor = $row['autor'];
                ?> 
            <div class="tabla">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>AUTOR</th>
                            <th>DESCRIPCION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $titulo; ?></td>
                            <td><?php echo $autor ?></td>
                            <td><?php echo $descripcion; ?></td>
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
