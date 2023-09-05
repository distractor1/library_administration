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
        .seleccionada {
        background-color:white; /* Cambia el color de fondo según tus preferencias */
        opacity: 0.8; /* transpariencia de la tabla al seleccionar*/
        }
        .seleccionar {
        width: 20px; 
        height: 20px; 
        }
        .seleccionar:checked {
        border: 2px solid #007bff; /* Cambia el color del borde cuando está seleccionada */
        }
        .seleccionar {
        margin-right: 5px; /* Añade espacio a la derecha de la casilla */
        }
        .seleccionar {
        cursor: pointer;
        }
        </style>
</head>
<body>
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
                <div class="titulos">SELECCIONAR</div>
                    <div class="titulos">ID</div>
                    <div class="titulos">TITULO</div>
                    <div class="titulos">AUTOR</div>
                    <div class="titulos">DESCRIPCION</div>
                    <?php  $resultado= mysqli_query($conex, $consulta);
                    while($row=mysqli_fetch_assoc($resultado)) {?>
                    <div class="dato"><input type="checkbox" class="seleccionar"></div>
                    <div class="dato"><?php  echo $row["id"];?></div>
                    <div class="dato"><?php  echo $row["titulo"];?></div>
                    <div class="dato"><?php  echo $row["autor"];?></div>
                    <div class="dato"><?php  echo $row["descripcion"];?></div>
               <?php } ?>

               <script>
                // Obtiene todos los elementos de la clase 'seleccionar'
                    const checkboxes = document.querySelectorAll('.seleccionar');

                // Agrega un evento click a cada checkbox
                    checkboxes.forEach(checkbox => {
                        checkbox.addEventListener('click', () => {
                            // Obtiene el div contenedor de la fila
                            const fila = checkbox.parentElement.parentElement;

                            // Si el checkbox está marcado, aplica un estilo de selección
                            if (checkbox.checked) {
                                fila.classList.add('seleccionada');
                            } else {
                                fila.classList.remove('seleccionada');
                                
                            }
                        });
                    });
</script>
</body>
</html>
