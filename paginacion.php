<div class="paginacion">
	Página
<?php
	if($paginaActual > 1) {
		echo "<a href='?p=1&" . $urlQueryString . "'>Primera</a> ";
		echo "<a href='?p=" . ($paginaActual - 1) . "&" . $urlQueryString . "'>Anterior</a> ";
	}

	for($i = 1; $i <= $totalDePaginas; $i++) {
		if($i != $paginaActual) {
			echo "<a href='?p=" . $i . "&" . $urlQueryString . "'>" . $i . "</a> ";
		} else {
			echo "<span class='paginaActual'>" . $i . "</span> ";
		}
	}

	if($paginaActual < $totalDePaginas) {
		echo "<a href='?p=" . ($paginaActual + 1) . "&" . $urlQueryString . "'>Siguiente</a> ";
		echo "<a href='?p=" . $totalDePaginas . "&" . $urlQueryString . "'>Última</a>";
	}
?>
</div>
