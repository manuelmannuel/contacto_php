<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario Contacto</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
			<input type="text" class="form_control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
			<input type="email" class="form_control" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
			<textarea name="mensaje" class="form_control" id="mensaje" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
			<?php if (!empty($errores)): ?>
			<div class="alert error">
				<p>Por favor:</p>
				<?php echo $errores; ?>
			</div>
			<?php elseif($enviado): ?>
			<div class="alert success">
				<p>Enviado Correctamente</p>
			</div>
			<?php endif ?>	
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
		</form>
	</div>
</body>
</html>