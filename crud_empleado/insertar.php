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

$sql="INSERT INTO empleado VALUES('$NoEmp','$NombreEmp','$FechaIngEmp','$PuestoEmp','$TelefonoEmp','$DomicilioEmp','$CorreoEmp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:empleado.php");
    
}else {
}
?>