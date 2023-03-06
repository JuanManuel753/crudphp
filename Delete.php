<?php

include("Connection/Connection.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Main.php");
    }
?>