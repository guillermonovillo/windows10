<?php
require_once "config.php";
require "conexion.php";


// Calculo los datos de la paginación.
$registrosPorPagina = 9;
// Busco la página actual. Si me llega por GET, uso esa. Sino, indico que es la primera.
$paginaActual = (!empty($_GET['p'])) ? $_GET['p'] : 1;
// Calculo cuál es el primer registro que tengo que traer en la consulta.
$primerRegistroQuery = ($registrosPorPagina * $paginaActual) - $registrosPorPagina;

/**
 * Armamos la consulta SQL con la que buscamos los usuarios.
 * Para poder agregar los parámetros de búsqueda, como pueden enviarnos cualquier combinación de los mismos,
 * lo que hacemos es poner la cláusula WHERE con la condición 1 (que significa true). Esto nos permite que el WHERE
 * ya esté fijo en la consulta, y que podamos ir agregando condiciones luego utilizando siempre AND.
 * Luego, vamos agregando las condiciones a la consulta, según los parámetros que nos hayan llegado.
 */
$query = "SELECT *";
$queryCantidadRegistros = "SELECT count(*) as cantidad";
$queryWhere = " FROM usuario";

// Armo los queries
$query .= $queryWhere . " ORDER BY id LIMIT " . $primerRegistroQuery . ", " . $registrosPorPagina;
$queryCantidadRegistros .= $queryWhere;

// Ejecutamos la consulta, y obtenemos el resultset de la consulta.
$res = mysqli_query($db, $query);


// Obtenemos el resultado con la cantidad de registros.
$resCantidadRegistros = mysqli_query($db, $queryCantidadRegistros);
$filaCantidadRegistros = mysqli_fetch_array($resCantidadRegistros);

// Calculo la cantidad de páginas.
$totalDePaginas = ceil($filaCantidadRegistros['cantidad'] / $registrosPorPagina);

$titulo = "Videos";
require "header.php";
?>

<?php
require "paginacion.php";
?>

<section class="videos container">
<div align="center">
	<div class="ellos_compartieron">
		<h5>Ellos compartieron sus grandes cosas</h5>
	</div></div>
	<div class="row">
    <?php
    while($fila = mysqli_fetch_array($res)){
    ?>
		<?php
		 $JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id={$fila['video']}&key=AIzaSyAWv6cI1ZcKv7sX5NL-jBIlFrNeURgV6-A&part=snippet,contentDetails,statistics,status");
		 $json_data = json_decode($JSON, true);
		?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="thumb_videos">
			 <div class="col-lg-12">
			   <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $fila['video'];?>" frameborder="0" allowfullscreen></iframe>
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
			 	<p> NOMBRE: <?php echo $fila['nombre'];?></p>
			 </div>
			 <div class="col-lg-12">
			 	<p>COMENTARIOS: <?php echo $fila['comentarios'];?></p>
			 </div>
			</div>
		</div>
<?php
} ?>

	</div>
	<?php
	require "paginacion.php";
	?>
</section>
<?php
require 'footer.php'
?>
