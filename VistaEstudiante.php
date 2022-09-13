<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">

    <title>ELVIS FERNANDO CLAUDIO RIVAS</title>

</head>
<body>
<div class="container-fluid">
<div class='mb-3'>
    <hr>
    <p>
    <div class="text-bg-primary p-3"><center><h2>INGRESO DE DATOS DEL ESTUDIANTE</center></h2> </div>
    </p>
    </hr>
        <form action="EstudianteController.php" method="post">
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
            </p>
            
            <p>
                <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            </p>
            
            <p>
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion">
            </p>
            
            <p>
                <label for="telefono">Telefono</label>
                <input type="number" name="telefono">
            </p>
            
            <p>
                <input class="btn btn-primary" type="submit" value="Guardar Registro" name="btnGuardar">
            </p>
        </form>
    </div>
    
   
    <table class="table table-striped">
    
        <hr>
        <div class="text-bg-dark p-3"><h3><center>LISTADO DE ESTUDIANTES</center></h3></div>
        <hr>
    
                <!-- <table border="1"> -->
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th colspan="2">OPERACIONES</th>
                <?php
                    include_once "EstudianteModel.php";
                    $Estudiante = new Estudiante();
                    $ListaEstudiantes = $Estudiante->ListarEstudiantes();
                    while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
                    {?>
                    <tr>
                            <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                            <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                            <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                            <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                            <td> <a href="VistaEditarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>"button type="button" class="btn btn-success">Editar</button></a></td>
                            <td> <a href="VistaEliminarEstudiante.php?idEst=<?php echo $Estudiantes['idEstudiante'];?>"button type="button" class="btn btn-danger">Eliminar</button></a></td>
                    </tr>
                    
                <?php } ?>

            
        </thead>
        </table>
    </body>
    </html>