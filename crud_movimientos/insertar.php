<?php
include("conexion.php");
$con=conectar();

$CuentaBanc=$_POST['CuentaBanc'];
$MontoCompras=$_POST['MontoCompras'];
$PagoCreditos=$_POST['PagoCreditos'];
$MontoDeudas=$_POST['MontoDeudas'];
$MontoServicios=$_POST['MontoServicios'];
$Ahorros=$_POST['Ahorros'];
$SaldoTotal=$_POST['SaldoTotal'];

$sql="INSERT INTO movimientos VALUES('$CuentaBanc','$MontoCompras','$PagoCreditos','$MontoDeudas','$MontoServicios','$Ahorros','$SaldoTotal')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:movimientos.php");
    
}else {
}
?>