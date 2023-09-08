<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>

    <style>
        /* diseño general de la pagina*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /* diseño de la estructura*/
        body {
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url(img/prub.jpg);
            background-size: cover;
        }
        /* diseño del menu genral*/
        .menu li a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            padding: 20px;
            display: block;
            font-size: 20px;
        }

        .menu li {
            display: inline-block;
            text-align: center;
        }

        .menu li a:hover {
            background: #8ac0ce;
        }
        /*dieño de la anamcion de apertura*/
        .p10 {
            position: relative;
            width: 200px;
            height: 200px;
            transform-style: preserve-3d;
            animation: animate 20s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: perspective(1000px) rotateY(0deg);
            }
            100% {
                transform: perspective(1000px) rotateY(360deg);
            }
        }

        .p10 span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-origin: center;
            transform-style: preserve-3d;
            transform: rotateY(calc(var(--i)* 45deg)) translateZ(400px);
            -webkit-box-reflect: below 0px linear-gradient(transparent, transparent, #0004);
        }

        .p10 span img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .icono {
        width: 100px;
        height: 130px;
        position: absolute;
        top: 20px;
        right: 20px;
        }
    </style>
</head>
<body>
    <a href="">
        <img class="icono" src="img/hessen icono.png">
    </a>
    <!--barra de menu de la pagina-->
    <ul class="menu">
        <li><a href="prestamo.php">PRESTAMO</a></li>
        <li><a href="registro.php">REGISTRO NUEVO</a></li>
        <li><a href="libros.php">LIBRO</a></li>
    </ul>
    <!--imagenes de uso para la pagina-->   
    <center style="margin-top: 100px;">
        <br><br><br><br><br></brz><div class="p10">
            <span style="--i:1;"><img src="img/a2.jpeg" alt=""></span>
            <span style="--i:2;"><img src="img/anatomia.jpeg" alt=""></span>
            <span style="--i:3;"><img src="img/cancer.jpeg" alt=""></span>
            <span style="--i:4;"><img src="img/clinica.jpeg" alt=""></span>
            <span style="--i:5;"><img src="img/conductas.jpeg" alt=""></span>
            <span style="--i:6;"><img src="img/HARRISON-MEDICINA-INTERNA.jpg" alt=""></span>
            <span style="--i:7;"><img src="img/psico.jpeg" alt=""></span>
            <span style="--i:8;"><img src="img/estetica.jpg" alt=""></span>
        </div>
    </center>
    <button id="salirBtn" style="position: fixed; bottom: 20px; right: 20px;">Salir</button>
    <script>
    document.getElementById("salirBtn").addEventListener("click", function() {
        if (confirm("¿Estás seguro de que deseas salir?")) {
            window.location.href = "index.html"; // Reemplaza "otra_pagina.html" con la URL de la página a la que deseas redirigir.
        }
    });
    </script>
</body>
</html>
