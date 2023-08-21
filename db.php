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
  }
?>