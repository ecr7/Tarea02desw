<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>VistaEditarEstudiante</title>
</head>
<body>

<div class="text-bg-secondary p-3"><center><h2>ELIMINAR DATOS DE ESTUDIANTE</center></h2> </div>
<p>
<p>
</p>

    <form action="EstudianteController.php" method="POST">
                        <?php
                            include_once "EstudianteModel.php";
                            $nuevoEstudiante = new Estudiante();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label for="txtapellidos">Apellidos:</label>
                                <input type="text" name="txtapellidos" 
                                value="<?php echo $resultadoFiltrado['apellidos']?>" disabled>
                                </p>

                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" 
                                value="<?php echo $resultadoFiltrado['nombre']?>" disabled>
                                </p>

                                <p>
                                <label for="txtdireccion">Direccion:</label>
                                <input type="text" name="txtdireccion" 
                                value="<?php echo $resultadoFiltrado['direccion']?>" disabled>
                                </p>

                                <p>
                                <label for="txttelefono">Telefono:</label>
                                <input type="text" name="txttelefono" 
                                value="<?php echo $resultadoFiltrado['telefono']?>" disabled>
                                </p>

                                 <p>
                                    <input type="hidden" name="idStudent" 
                                    value="<?php echo $resultadoFiltrado['idEstudiante']?>">
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input class="btn btn-danger" type="submit" value="Eliminar al Estudiante" name="btnEliminar">            
    </form>
</body>
</html>