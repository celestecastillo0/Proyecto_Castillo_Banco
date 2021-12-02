<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM transacciones";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Transaccion</title>
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

                                    <input type="text" class="form-control mb-3" name="CuentaBancaria" placeholder="Cuenta Bancaria">
                                    <input type="text" class="form-control mb-3" name="TipoTransferencia" placeholder="Tipo de Transferencia">
                                    <input type="text" class="form-control mb-3" name="MontoTransferencia" placeholder="Monto Transferencia">
                                    <input type="date" class="form-control mb-3" name="FechaTransferencia" placeholder="Fecha Transferencia">
                                    <input type="text" class="form-control mb-3" name="NoTransacciones" placeholder="Numero de Transacciones">
                                    <input type="text" class="form-control mb-3" name="EmpBeneficiaria" placeholder="Empresa Beneficiaria">
                                    <input type="text" class="form-control mb-3" name="RefBancaria" placeholder="Referencia Bancaria">
                                    <a href="../index.php"class="btn btn-primary">Inicio</a></li> 
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cuenta Bancaria</th>
                                        <th>Tipo Transferencia</th>
                                        <th>Monto Transferencia</th>
                                        <th>Fecha Transferencia</th>
                                        <th>Numero Transacciones</th>
                                        <th>Empresa Beneficiaria</th>
                                        <th>Referencia Bancaria</th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['CuentaBancaria']?></th>
                                                <th><?php  echo $row['TipoTransferencia']?></th>
                                                <th><?php  echo $row['MontoTransferencia']?></th>
                                                <th><?php  echo $row['FechaTransferencia']?></th>
                                                <th><?php  echo $row['NoTransacciones']?></th>
                                                <th><?php  echo $row['EmpBeneficiaria']?></th>
                                                <th><?php  echo $row['RefBancaria']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['CuentaBancaria'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['CuentaBancaria'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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