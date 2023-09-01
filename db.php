<?php 
$servername = "localhost";
$username = "root";
$password = "";     
$dbname = "hessen_library";
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<?php
  if(isset($_POST['registro'])){

    $titulo= $_POST ['titulo'];
    $autor= $_POST ['autor'];
    $descripcion= $_POST ['descripcion'];

    $insertarDatos = "INSERT INTO libro VALUES('','$titulo','$descripcion','$autor')";
    $ejecutarInsertar = mysqli_query($conn,$insertarDatos);

    if ($ejecutarInsertar) {
      //  mostrar una ventana de confirmación
      echo "<script>alert('Libro registrado con éxito');</script>";
    } else {
      //  muestrar una ventana de error
      echo "<script>alert('Error al registrar el libro');</script>";
    }
  }
?>