<?php

include("conexion.php");
$con=conectar();

$CuentaBancaria=$_GET['id'];

$sql="DELETE FROM transacciones WHERE CuentaBancaria='$CuentaBancaria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:transacciones.php");
    }
?>