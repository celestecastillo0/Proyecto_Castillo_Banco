<?php

include("conexion.php");
$con=conectar();

$NoEmp=$_GET['id'];

$sql="DELETE FROM empleado WHERE NoEmp='$NoEmp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:empleado.php");
    }
?>