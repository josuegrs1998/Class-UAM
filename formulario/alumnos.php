<?php 

	$conexion=mysqli_connect('localhost','root','','Universidad');

 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
	
	<title>mostrar datos</title>
</head>
<body>
<div class = "fondo">

<h1 id="h1conf"> Tabla Alumnos</h1>

<br>

<div class="container">
	<div class="row align-items-start">
	<div class="col">
	<table class="tabla">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Acciones</td>
				
		</tr>

		<?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			echo "<tr>
			<td>".$mostrar['idalumno']."</td>
			<td>".$mostrar['nombre']."</td>
			<td>".$mostrar['apellido']."</td>

			<td>
			<button >
			<a  href='update.php?rn=$mostrar[idalumno]&sn=$mostrar[nombre]&cl=$mostrar[apellido]'>Editar</a>
			</button>

			<button >
			<a  href='delete.php?rn=$mostrar[idalumno]'>Borrar</a>
			</button>
			</td>
			
			</tr>";
				
		 ?>
	
			
	<?php 
	}
	 ?>
	</table>
	</div>
	<div class="form col">
	<form action="guardar.php" method="POST" autocomplete="off">
		<p>CIF</p>
		
		<br>
		<input type="text" name="cif" placeholder="CIF" maxlength="8" required>
		<p>Nombre</p>
		
		<br>
		<input type="text" name="nombre" placeholder="Primer nombre" maxlength="45" required>
		<p>Apellido</p>
		
		<br>
		<input type="text" name="apellido" placeholder="Apellido" maxlength="45" required>
		<br>
		<br>
		<input type="submit" value="Enviar"/>
	</form>
	</div>
</div>
</div>

</div>


</body>
</html>