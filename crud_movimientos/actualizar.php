<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM movimientos WHERE CuentaBanc='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="CuentaBanc" value="<?php echo $row['CuentaBanc']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="MontoCompras" placeholder="Monto de Compras" value="<?php echo $row['MontoCompras']  ?>">
                                <input type="text" class="form-control mb-3" name="PagoCreditos" placeholder="Pago de Creditos" value="<?php echo $row['PagoCreditos']  ?>">
                                <input type="text" class="form-control mb-3" name="MontoDeudas" placeholder="Monto de Deudas" value="<?php echo $row['MontoDeudas']  ?>">
                                <input type="text" class="form-control mb-3" name="MontoServicios" placeholder="Monto a pagar de Servicios" value="<?php echo $row['MontoServicios']  ?>">
                                <input type="text" class="form-control mb-3" name="Ahorros" placeholder="Ahorros" value="<?php echo $row['Ahorros']  ?>">
                                <input type="text" class="form-control mb-3" name="SaldoTotal" placeholder="Saldo Total" value="<?php echo $row['SaldoTotal']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>