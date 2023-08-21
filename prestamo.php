<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamo de Libro</title>
    <!-- Incluye los archivos CSS y JS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Prestar un Libro</h2>
        <form method="post">
            <div class="form-group">
                <label for="book_id">ID del Libro:</label>
                <input type="number" class="form-control" name="book_id" required>
            </div>
            <div class="form-group">
                <label for="borrower_name">Nombre:</label>
                <input type="text" class="form-control" name="borrower_name" required>
            </div>
            <div class="form-group">
                <label for="borrower_dni">DNI:</label>
                <input type="text" class="form-control" name="borrower_dni" required>
            </div>
            <div class="form-group">
                <label for="borrower_carrera">Carrera:</label>
                <input type="text" class="form-control" name="borrower_carrera" required>
            </div>
            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary">Prestar Libro</button>
        </form>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hessen_library";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $book_id = $_POST["book_id"];
            $borrower_name = $_POST["borrower_name"];
            $borrower_dni = $_POST["borrower_dni"];
            $borrower_carrera = $_POST["borrower_carrera"];

            $sql_check_available = "SELECT quantity_available FROM books WHERE id = $book_id";
            $result_check = $conn->query($sql_check_available);

            if ($result_check && $result_check->num_rows > 0) {
                $row = $result_check->fetch_assoc();
                $quantity_available = $row["quantity_available"];

                if ($quantity_available > 0) {
                    $sql_update_book = "UPDATE books SET quantity_available = quantity_available - 1 WHERE id = $book_id";
                    $conn->query($sql_update_book);

                    $sql_insert_borrower = "INSERT INTO borrowers (name, DNI, carrera, book_id) VALUES ('$borrower_name', '$borrower_dni', '$borrower_carrera', $book_id)";
                    $conn->query($sql_insert_borrower);

                    echo '<div class="alert alert-success mt-3">Libro prestado exitosamente.</div>';
                } else {
                    echo '<div class="alert alert-danger mt-3">Libro no disponible.</div>';
                }
            }
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
