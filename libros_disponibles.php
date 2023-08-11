<!DOCTYPE html>
<html>
<head>
    <title>Libros Disponibles</title>
    <!-- Agrega enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Agrega estilos personalizados */
        .book-card {
            position: relative;
            margin-bottom: 20px;
        }
        .book-description {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 200px;
        }
        .book-card:hover .book-description {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Libros Disponibles</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="ruta_a_imagen1.jpg" alt="Libro 1" class="img-fluid">
                    <div class="book-description">
                        <p>Descripción del Libro 1.</p>
                        <p>Disponibilidad: <span class="availability">Disponible</span></p>
                    </div>
                </div>
            </div>
            <!-- Repite esta estructura para otros libros -->
        </div>
    </div>

    <!-- Agrega enlaces a los archivos JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
