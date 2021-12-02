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

$sql="UPDATE transacciones SET  TipoTransferencia='$TipoTransferencia',MontoTransferencia='$MontoTransferencia',FechaTransferencia='$FechaTransferencia',NoTransacciones='$NoTransacciones',EmpBeneficiaria='$EmpBeneficiaria',RefBancaria='$RefBancaria' WHERE CuentaBancaria='$CuentaBancaria'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:transacciones.php");
    }
?>