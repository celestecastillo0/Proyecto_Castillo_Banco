<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM transacciones WHERE CuentaBancaria='$id'";
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
                    
                                <input type="hidden" name="CuentaBancaria" value="<?php echo $row['CuentaBancaria']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="TipoTransferencia" placeholder="Tipo de Transferencia" value="<?php echo $row['TipoTransferencia']  ?>">
                                <input type="text" class="form-control mb-3" name="MontoTransferencia" placeholder="Monto de Transferencia" value="<?php echo $row['MontoTransferencia']  ?>">
                                <input type="date" class="form-control mb-3" name="FechaTransferencia" placeholder="Fecha de Transferencia" value="<?php echo $row['FechaTransferencia']  ?>">
                                <input type="text" class="form-control mb-3" name="NoTransacciones" placeholder="Numero Transacciones" value="<?php echo $row['NoTransacciones']  ?>">
                                <input type="text" class="form-control mb-3" name="EmpBeneficiaria" placeholder="EmpBeneficiaria" value="<?php echo $row['EmpBeneficiaria']  ?>">
                                <input type="text" class="form-control mb-3" name="RefBancaria" placeholder="RefBancaria" value="<?php echo $row['RefBancaria']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>