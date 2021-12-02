<?php

include("conexion.php");
$con=conectar();

$CuentaBanc=$_GET['id'];

$sql="DELETE FROM movimientos  WHERE CuentaBanc='$CuentaBanc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:movimientos.php");
    }
?>