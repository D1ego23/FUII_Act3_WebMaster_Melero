<?php 

include("con_db.php");

if (isset($_POST['empleados'])) {
    if (strlen($_POST['id']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 
	&& strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
	    $id = trim($_POST['id']);
		$nombre = trim($_POST['nombre']);
		$apellidos = trim($_POST['apellidos']);
	    $correo = trim($_POST['correo']);
		$telefono = trim($_POST['telefono']);
	    $consulta = "INSERT INTO empleados(id, nombre, apellidos, correo, telefono) VALUES ('$id','$nombre','$apellidos','$correo','$telefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has regristrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>