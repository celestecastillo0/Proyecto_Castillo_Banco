<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM movimientos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Movimientos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="CuentaBanc" placeholder="Cuenta Bancaria">
                                    <input type="text" class="form-control mb-3" name="MontoCompras" placeholder="Monto Compras">
                                    <input type="text" class="form-control mb-3" name="PagoCreditos" placeholder="Pago Creditos">
                                    <input type="text" class="form-control mb-3" name="MontoDeudas" placeholder="Montode Deudas">
                                    <input type="text" class="form-control mb-3" name="MontoServicios" placeholder="Monto a pagar por Servicios">
                                    <input type="text" class="form-control mb-3" name="Ahorros" placeholder="Ahorros">
                                    <input type="text" class="form-control mb-3" name="SaldoTotal" placeholder="Saldo Total">
                                    <a href="../index.php"class="btn btn-primary">Inicio</a></li> 
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cuenta Bancaria</th>
                                        <th>Monto de Compras</th>
                                        <th>Pago de Creditos</th>
                                        <th>Monto de Deudas</th>
                                        <th>Monto a pagar de Servicios</th>
                                        <th>Ahorros</th>
                                        <th>Saldo Total</th>

                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['CuentaBanc']?></th>
                                                <th><?php  echo $row['MontoCompras']?></th>
                                                <th><?php  echo $row['PagoCreditos']?></th>
                                                <th><?php  echo $row['MontoDeudas']?></th>    
                                                <th><?php  echo $row['MontoServicios']?></th>
                                                <th><?php  echo $row['Ahorros']?></th>
                                                <th><?php  echo $row['SaldoTotal']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['CuentaBanc'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['CuentaBanc'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>