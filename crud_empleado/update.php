<?php

include("conexion.php");
$con=conectar();

$NoEmp=$_POST['NoEmp'];
$NombreEmp=$_POST['NombreEmp'];
$FechaIngEmp=$_POST['FechaIngEmp'];
$PuestoEmp=$_POST['PuestoEmp'];
$TelefonoEmp=$_POST['TelefonoEmp'];
$DomicilioEmp=$_POST['DomicilioEmp'];
$CorreoEmp=$_POST['CorreoEmp'];


$sql="UPDATE empleado SET  NombreEmp='$NombreEmp',FechaIngEmp='$FechaIngEmp',PuestoEmp='$PuestoEmp',TelefonoEmp='$TelefonoEmp',DomicilioEmp='$DomicilioEmp',CorreoEmp='$CorreoEmp' WHERE NoEmp='$NoEmp'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:empleado.php");
    }
?>