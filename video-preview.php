<?php
require_once 'config.php';
require_once 'conexion.php';

$_tituloPagina = "Vista previa Video";
require 'header.php';

$nombre = $_GET['nombre'];
$video = base64_decode($_GET['video']);
$comentarios = $_GET['comentarios'];

?>
<div class="videos container">

	<?php
	 $JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id={$video}&key=AIzaSyAWv6cI1ZcKv7sX5NL-jBIlFrNeURgV6-A&part=snippet,contentDetails,statistics,status");
	 $json_data = json_decode($JSON, true);
	?>
	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
		<div class="thumb_videos">
		 <div class="col-lg-12">
			 <iframe width="100%" height="480" src="https://www.youtube.com/embed/<?php echo $video?>" frameborder="0" allowfullscreen style="pointer-events:auto"></iframe>
		 </div>
		 <div class="content-social col-lg-12 col-md-12 col-sm-12 col-xs-12">
			 <div class="social">
				 <a href="http://www.hacegrandescosas.com/preview/videos-preview.php?video='<?php echo $video?>'" data-commit="<?php echo base64_decode($comentarios)?>" id="sharebutton"><i class="fa fa-facebook-square fa-3x"></i></a>
			 </div>
			 <div class="social text-left">
				 <a class="twitter"
			 href="https://twitter.com/intent/tweet?url=http://www.hacegrandescosas.com/preview/videos-preview.php?video='<?php echo $video?>'" data-text="Hace grandes cosas!!" data-via="GuilleNovillo" data-count="none"><i class="fa fa-twitter-square fa-3x"></i></a>
			 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
			 </script>
		 </div>
		</div>
		 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 text-left">
				<p>
					<?php
						echo $json_data['items'][0]['snippet']['title'];
					?>
			 </p>
		 </div>
		 <div class="col-lg-3 col-md-9 col-sm-12 col-xs-12 text-right">
				<p>View:
					<?php
						echo $json_data['items'][0]['statistics']['viewCount'];
					?>
			 </p>
		 </div>
		 <div class="col-lg-12">
			<p> NOMBRE: <?php echo base64_decode($nombre)?></p>
		 </div>
		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>COMENTARIO: <?php echo base64_decode($comentarios)?></p>
		 </div>
		</div>
	</div>

</div>

<?php
	require 'footer.php';
?>
