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

$sql="UPDATE movimientos SET  MontoCompras='$MontoCompras',PagoCreditos='$PagoCreditos',MontoDeudas='$MontoDeudas',MontoServicios='$MontoServicios',Ahorros='$Ahorros',SaldoTotal='$SaldoTotal' WHERE CuentaBanc='$CuentaBanc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:movimientos.php");
    }
?>