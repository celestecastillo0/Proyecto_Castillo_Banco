<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM empleado WHERE NoEmp='$id'";
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
                    
                                <input type="hidden" name="NoEmp" value="<?php echo $row['NoEmp']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="NombreEmp" placeholder="Nombre del empleado" value="<?php echo $row['NombreEmp']  ?>">
                                <input type="date" class="form-control mb-3" name="FechaIngEmp" placeholder="Fecha de ingreso del cliente" value="<?php echo $row['FechaIngEmp']  ?>">
                                <input type="text" class="form-control mb-3" name="PuestoEmp" placeholder="Puesto de empleado" value="<?php echo $row['PuestoEmp']  ?>">
                                <input type="text" class="form-control mb-3" name="TelefonoEmp" placeholder="Telefono empleado" value="<?php echo $row['TelefonoEmp']  ?>">
                                <input type="text" class="form-control mb-3" name="DomicilioEmp" placeholder="Domicilio del cliente" value="<?php echo $row['DomicilioEmp']  ?>">
                                <input type="text" class="form-control mb-3" name="CorreoEmp" placeholder="Correo empleado" value="<?php echo $row['CorreoEmp']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>