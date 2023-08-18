<?php
session_start();

// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario de MySQL es diferente
$password = "";     // Cambia esto si tienes una contraseña configurada
$dbname = "hessen_library";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    $_SESSION['usuario'] = $usuario;
    header("Location: inic.php"); // Redirige al archivo inic.php
} else {
    // Inicio de sesión fallido
    echo "<script>
            alert('Usuario o contraseña incorrectos. vuelva a intentarlo.');
            window.location.href = 'index.html';
          </script>";
}

// Cerrar la conexión
$conn->close();
?>
