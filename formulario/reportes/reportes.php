<?php 

include('../conexion.php');

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../alumnos.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	

<title>mostrar datos</title>
</head>
<body background-color: #fff>
<div id="container">
    <div class="sidebar">
            <li ><a class="menu" href='../main.php'>Home</a> </li>
            <li> <a class="menu" href='../alumnos/alumnos.php'>Alumnos</a></li>
            <li> <a class="menu" href='../profesores/profesores.php'>Profesores</a></li>
            <li> <a class="menu" href='../materias/materias.php'>Materias</a></li>
            <li> <a class="menu" href='../matricula/matricula.php'>Matricula</a></li>
            <li> <a class="menu" href='reportes.php'>Reportes</a></li>

    </div>

    <div id="main">
            <div class="contenedor-tabla"> 
                <h2>Matricula de alumnos</h2>
                    <table class="tabla">
                            <tr>
                                <td>ID alumno</td>
                                <td>Alumnos</td>
                                <td>ID materia</td>
                                <td>Materia</td>
                                
                                    
                            </tr>

                        <?php 
                        $sql="SELECT matri.idalumno, alumnos.nombre as alumnos, matri.idmateria,materias.nombre 
                        from materias_alumnos as matri, materias, alumnos 
                        where matri.idalumno = alumnos.idalumno and materias.idmateria = matri.idmateria";
                        $result=mysqli_query($conexion,$sql);

                        while($mostrar=mysqli_fetch_array($result)){
                            echo "<tr>
                            <td>".$mostrar['idalumno']."</td>
                            <td>".$mostrar['alumnos']."</td>
                            <td>".$mostrar['idmateria']."</td>
                            <td>".$mostrar['nombre']."</td>
                        
                            </tr>";
                                
                        ?>
                        
                    <?php 
                    }
                    ?>
                    </div>
                </div>	
     
</body>
</html>