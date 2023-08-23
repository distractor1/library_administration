<?php 
$servername = "localhost";
$username = "root";
$password = "";     
$dbname = "hessen_library";
$conn1 = new mysqli($servername, $username, $password, $dbname);
?>
<?php
  if(isset($_POST['insertar'])){

    $titulo1= $_POST ['titulo1'];
    $autor1= $_POST ['autor1'];
    $descripcion1= $_POST ['descripcion1'];
    $estado= $_POST ['estado'];
    $fecha= $_POST ['fecha'];
    $dni_est= $_POST ['dni_est'];
    $nombre= $_POST ['nombre'];

    $insertarDatos1 = "INSERT INTO prestamo VALUES('','$titulo1','$autor1','$descripcion1','$estado','$fecha','$dni_est','$nombre')";
    $ejecutarInsertar1 = mysqli_query($conn1,$insertarDatos1);
  }
?>