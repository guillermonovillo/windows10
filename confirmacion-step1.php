<?php
require_once 'config.php';
require_once 'conexion.php';
/*echo "<pre>";
print_r ($_POST);
print_r ($_FILES);
echo "</pre>";
todo: alta de imagen: sirve para guardar comentarios en algunos editores
*/
//fin de guardado de datos
//va despues del config por que este inicia y antes del header siempre
$_tituloPagina = "Confirmacion Video";
require 'header.php';

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$url = base64_decode($_GET['video']);
$video = substr($url, 17);
$comentarios = $_GET['comentarios'];
$news = $_GET['news'];


?>
<div class="confirmacion container">

	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
		<br><br><br><br>
			<iframe width="100%" height="480" src="https://www.youtube.com/embed/<?php echo $video?>" frameborder="0" allowfullscreen style="pointer-events:auto"></iframe>
		<br><br>
	</div>
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
	<form id="confirmation" action="confirmacion.php" method="post" enctype="multipart/form-data">
	  <div class="form-group col-lg-6 col-md-6 col-sm-6" style="position: relative;z-index: 1;">
	    <label for="nombre">Nombre</label>
			<div class="overlay-input"></div>
			<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo base64_decode($nombre)?>">
	  </div>
		<div class="form-group col-lg-6 col-md-6 col-sm-6" style="position: relative;z-index: 1;">
			<label>Apellido</label>
			<div class="overlay-input"></div>
			<input class="form-control" type="text" name="apellido" id="apellido" value="<?php echo base64_decode($apellido)?>">
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-6" style="position: relative;z-index: 1;">
			<label>Email</label>
			<div class="overlay-input"></div>
			<input class="form-control" type="text" name="email" id="email" value="<?php echo base64_decode($email)?>">
		</div>
		<div class="form-group col-lg-6 col-md-6 col-sm-6" style="position: relative;z-index: 1;">
			<label>Video</label>
			<div class="overlay-input"></div>
			<input class="form-control" type="text" name="video" id="video" value="<?php echo $video?>" style="position: relative">
		</div>
		<div class="form-group col-lg-12 col-md-12 col-sm-12" style="position: relative;z-index: 1;">
			<label>Comentarios</label>
			<textarea class="form-control" name="comentarios" id="comentarios" cols="40" rows="4"><?php echo base64_decode($comentarios)?></textarea>
		</div>
			<div class="checkbox col-lg-12 col-md-12 col-sm-12 text-left">
				<label for="news">
					<input type="checkbox" id="news" name="news" value="<?php echo $_GET['news'];?>"<?php if($news == 1){echo checked;}?>>Acepta recibir ofertas y novedades de windows
				</label>
			</div>
		<div class="form-group col-lg-12 col-md-12 col-sm-12">
			<button type="submit" class="btn btn-success">Confirmar</button>
			<button type="reset" class="btn btn-warning" class="btn btn-default">Descartar</button>
 		</div>
		<div class="form-group col-lg-12 col-md-12 col-sm-12" id="form_confirmation"></div>
	</form>
</div>
</div>

<?php
require 'footer.php';
?>
