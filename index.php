<!DOCTYPE html>
<html>
<head>
	<title>Registrar empleado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Registro de empleados</h1>
		<input type="number" name="id" placeholder="Id">
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellidos" placeholder="Apellidos">
    	<input type="email" name="correo" placeholder="Email">
		<input type="text" name="telefono" placeholder="Telefono">
    	<input type="submit" name="empleados">
    </form>
        <?php 
        include("empleados.php");
        ?>
</body>
</html>