<?php
include("conexion.php");
$con=conectar();

$CuentaBancaria=$_POST['CuentaBancaria'];
$TipoTransferencia=$_POST['TipoTransferencia'];
$MontoTransferencia=$_POST['MontoTransferencia'];
$FechaTransferencia	=$_POST['FechaTransferencia'];
$NoTransacciones=$_POST['NoTransacciones'];
$EmpBeneficiaria=$_POST['EmpBeneficiaria'];
$RefBancaria=$_POST['RefBancaria'];


$sql="INSERT INTO transacciones VALUES('$CuentaBancaria','$TipoTransferencia','$MontoTransferencia','$FechaTransferencia','$NoTransacciones','$EmpBeneficiaria','$RefBancaria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:transacciones.php");
    
}else {
}
?>