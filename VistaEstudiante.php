<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
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
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
             <input type="submit" value="Guardar Registro"class="btn btn-primary"> </button>
        </p>
    
    </form>
    <hr>
    <div class="p-3 mb-2 bg-secondary text-white"> <h2 class="fw-bold"><center>LISTADO DE ESTUDIANTES</h2></center></div>
    <hr>

    <table class="table table-striped">
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
                <td><button type="button" class="btn btn-success">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                
            </tr>
        
          
       <?php } ?>
    
    </table>
</body>
</html>
