<?php 
    include("Connection/Connection.php");
    $con = Conectar();

    $sql = "SELECT * FROM alumno";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Main</title>
</head>
<body style = "display:flex; justify-content: center;">
    <div class = "container mt-5">
        <div class = "row">
            <div class = "col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>Numero De Identificacion</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <a href="NewPage.php" class="btn btn-success" style =" margin-bottom:10px;">Nuevo</a>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th><?php  echo $row['cod_estudiante']?></th>
                                <th><?php  echo $row['dni']?></th>
                                <th><?php  echo $row['nombres']?></th>
                                <th><?php  echo $row['apellidos']?></th>    
                                <th><a href="Edit.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-outline-info">Editar</a></th>
                                <th><a href="Delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-outline-danger">Eliminar</a></th>                                        
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