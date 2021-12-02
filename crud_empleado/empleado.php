<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Empleado</title>
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

                                    <input type="text" class="form-control mb-3" name="NoEmp" placeholder="No Empleado">
                                    <input type="text" class="form-control mb-3" name="NombreEmp" placeholder="Nombre Empleado">
                                    <input type="date" class="form-control mb-3" name="FechaIngEmp" placeholder="Fecha Ingreso del Empleado">
                                    <input type="text" class="form-control mb-3" name="PuestoEmp" placeholder="Puesto Empleado">
                                    <input type="text" class="form-control mb-3" name="TelefonoEmp" placeholder="Telefono Empleado">
                                    <input type="text" class="form-control mb-3" name="DomicilioEmp" placeholder="Domicilio del Empleado">
                                    <input type="text" class="form-control mb-3" name="CorreoEmp" placeholder="Correo del Empleado"> 
                                    <a href="../index.php"class="btn btn-primary">Inicio</a></li> 
                                    <input type="submit" class="btn btn-primary">
                                   
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>No empleado</th>
                                        <th>Nombre empleado</th>
                                        <th>Fecha de ingreso del empleado</th>
                                        <th>Puesto empleado</th>
                                        <th>Telefono empleado</th>
                                        <th>Domicilio empleado</th>
                                        <th>Correo del empleado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NoEmp']?></th>
                                                <th><?php  echo $row['NombreEmp']?></th>
                                                <th><?php  echo $row['FechaIngEmp']?></th>
                                                <th><?php  echo $row['PuestoEmp']?></th>
                                                <th><?php  echo $row['TelefonoEmp']?></th>
                                                <th><?php  echo $row['DomicilioEmp']?></th>  
                                                <th><?php  echo $row['CorreoEmp']?></th> 
                                                <th><a href="actualizar.php?id=<?php echo $row['NoEmp'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NoEmp'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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