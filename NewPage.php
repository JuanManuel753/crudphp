<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style = "display:flex; justify-content: center;">
    <div id = "nuevosDatos" class = "col-md-3" >
            <h1>Ingresar datos<h1>
            <form action="Insert.php" method="POST">
                <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Codigo De Estudiante">
                <input type="text" class="form-control mb-3" name="dni" placeholder="Numero De Identificación">
                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">

                <div style = "display:flex; justify-content: center;">
                <input type="submit" class="btn btn-success" style = "margin-right:15px;"  value="Enviar">
                <a href="Main.php" class="btn btn-danger">Salir</a>
            </form>
        </div>
</body>
</html>