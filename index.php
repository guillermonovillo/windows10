<?php

	require_once 'config.php';
	// require_once 'conexion.php';
	//
	// //hacemos la consulta a la base de datos
	// $query = "SELECT * FROM usuario LIMIT 5";
	//
	// $res = mysqli_query($db, $query);
	$_tituloPagina = "Windows 10 Pro e Windows 10 Enterprise para sua empresa";
	require	 "header.php";
?>
	<div id="home" class="container home">
		<section>
			<video id="bgvid" autoplay="no" loop="no" muted="muted">
				<source src="assets/home.webm" type="video/webm">
				<source src="assets/home.ogv" type="video/ogg">
				<source src="assets/home.mp4" type="video/mp4">
			</video>

			<div class="text">
				<h1>Hacé grandes cosas</h1>
				<h2>Conocé historias reales, de personas como vos, y apoyá la causa social que más te gusta.
					<br>
					<strong>Además, también podés compartir tus grandes y pequeños logros.</strong>
				</h2>
				<br>
				<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">SUBIR VIDEO</button>
				<!-- modal home -->
				<div class="modal fade form-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content form-content-modal">
							<div class="modal-header">
								<button type="button" class="close close-form" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h4 class="modal-title">Sub&iacute; tu video y compart&iacute; tus grandes cosas</h4>
							</div>
							<div class="modal-body">
								<form id="form_compartir" action="upload.php" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label for="firstAndLast" class="control-label">* NOMBRE Y APELLIDO:</label>
										<input type="text" class="form-control" id="firstAndLast" name="firstAndLast" value="<?php echo $nombre;?>">
									</div>
									<div class="form-group">
										<label for="email" class="control-label">* MAIL:</label>
										<input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>">
									</div>
									<div class="form-group">
										<label for="video" class="control-label">* URL DE YOUTUBE:</label>
										<input type="text" class="form-control" id="video" name="video" value="<?php echo $video;?>">
									</div>
									<div class="form-group">
										<label for="comentarios" class="control-label">CONTANOS M&Aacute;S DE TU HISTORIA:</label>
										<textarea class="form-control" id="comentarios" name="comentarios"><?php echo $comentarios;?></textarea>
									</div>
									<div class="checkbox text-left">
										<label for="legal">
											<input type="checkbox" id="legal" name="legal" value="1">* Acepto las <a href="#" data-toggle="modal" data-target="#exampleModalb">Bases y condiciones</a>
										</label>
									</div>
									<div class="checkbox text-left">
										<label for="news">
											<input type="checkbox" id="news" name="news" value="1">Acepto recibir noticias y novedades de Microsoft
										</label>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary envio-video" id="btn_compartir">Envi&aacute; tu video <span><img src="img/send.png" alt="" /></span></button>
									</div>
									<div id="form-messages"></div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>


		</section>
	</div>

	<div id="ver_videos" class="container video">
		<div class="text">
			<h1>Mirá los videos y compartí la causa social que más te gusta.</h1>
			<h2>Los 3 videos más vistos recibirán un upgrade para que sus protagonistas sigan haciendo grandes cosas.
				<br>
				<strong>Además, también podés compartir tus grandes y pequeños logros.</strong>
			</h2>
		</div>

		<div id="wrapper_bu" class="videos_carusel">
			<div id="bu1" class="videos_carusel">
				<iframe id="video-1" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/o2KqJaxVXzU?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu2" class="videos_carusel">
				<iframe id="video-2" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/Jw9-pJUaUpA?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu3" class="videos_carusel">
				<iframe id="video-3" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/R1LPs4wARoM?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu4" class="videos_carusel">
				<iframe id="video-4" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/EY6M2WdTxRA?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu5" class="videos_carusel">
				<iframe id="video-5" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/BOU5w1LUAWE?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu6" class="videos_carusel">
				<iframe id="video-6" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/Gu6vmNz-PhE?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu7" class="videos_carusel">
				<iframe id="video-7" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/G3OIGCDGGBo?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu8" class="videos_carusel">
				<iframe id="video-8" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/twncW4PLdsY?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu9" class="videos_carusel">
				<iframe id="video-9" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/JSmc_kb9Amw?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu10" class="videos_carusel">
				<iframe id="video-10" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/AaY5oGcfejQ?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
			<div id="bu11" class="videos_carusel">
				<iframe id="video-11" class="video_iframe" width="100%" height="100%" src="https://www.youtube.com/embed/8Mx-HgFwNhg?enablejsapi=1&version=3" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div align="center">
		<div class="vervi">
			<a href="videos.php" class="btn" target="_blank">VER MÁS VIDEOS</a>
</div></div>

	</div>
	<section>


	</section>
	</div>

	<div id="w_10" class="container windows_10">
     <section class="margen_top">
      <div class="conoce2">
       <h2>Conocé Windows 10</h2>
          </div>
             <div class="thumb">
                <div class="row">
                    <div class="col-md-3" >
                      <div class="thumbnail">
                        <img src="img/th_01.png" alt="...">
                        <div class="logo_thumb img-responsive"><img src="img/logo_thumb_01.png" alt=""></div>
                        <div class="caption">
                          <h3>Hacé cosas</h3>
                          <h4>con confianza</h4>
                          <p>Aspecto familiar, pero mejorado.</p>
                         </div>
                      <a rel="drevil"><span class="glyphicon glyphicon glyphicon-plus-sign" id="tUno"></span></a>

                    </div>
                      <div class="col-md-12 oculto" id="col1" style="padding:0px;">
                      <div class="thumbnail">
                        <div class="caption">
                           <p>
                           <ul>
                           	<li>Diseñado para ser el sistema
  								operativo más compatible del mundo.</li><br>
                           	<li>Más familiar que nunca; vuelve
  								 el Inicio y permanecen las App
  								 de siempre.</li><br>
                           	<li> Poné tus tiles personalizadas
  								 en todos tus dispositivos. </li><br>
                           	<li>Máxima duración de batería.</li><br>
                           	<li>Seguridad actualizada contra
   								virus y malware.</li><br>
                           </ul>
                           </p>
                         </div>


                    </div>

                  </div>
                  </div>
                    <div class="col-md-3 " >
                      <div class="thumbnail">
                        <img src="img/th_02.png" alt="...">
                        <div class="logo_thumb img-responsive"><img src="img/logo_thumb_02.png" alt=""></div>
                        <div class="caption">
                          <h3>Hacé cosas de </h3>
                          <h4>manera simple</h4>
                          <p>Funciones para una mejor organización.</p>
                        </div>
                         <span class="glyphicon glyphicon glyphicon-plus-sign" id="tDos"></span>
                      </div>
                       <div class="col-md-12 oculto"  id="col2" style="padding:0px;" >
                      <div class="thumbnail">
                        <div class="caption">
                        <p>
                          <ul>
                          	<li>Tenés OneDrive para guardar películas,
  								documentos, fotos, música y otros
  								archivos en la Nube de manera
  								gratuita, y acceder a ellos desde
  								cualquier lugar. </li><br>
                          	<li>Conectá tu Xbox Live a tu
  								Windows 10: game score, juegos
  								y amigos, tal como lo hacés
  								con tu Xbox.</li><br>
                          </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                    </div>
                  <div class="col-md-3 " >
                      <div class="thumbnail">
                        <img src="img/th_03.png" alt="...">
                        <div class="logo_thumb img-responsive"><img src="img/logo_thumb_03.png" alt=""></div>
                        <div class="caption">
                          <h3>Hacé cosas</h3>
                          <h4>fácilmente</h4>
                          <p>Fácil y rápido.</p>
                        </div>

                        <span class="glyphicon glyphicon glyphicon-plus-sign" id="tTres"></span>

                    </div>
                      <div class="col-md-12 oculto" id="col3" style="padding:0px;">
                      <div class="thumbnail">
                        <div class="caption">
                          <p><ul>
                          	<li>Microsoft Edge: el nuevo navegador
							 que te permite escribir notas sobre
							 la web, las que podés guardar
							 y compartir.</li><br>
                          	<li>Office 365: el software más productivo
							 del mundo, con lo nuevo de Word,
							 Excel, OneNote y PowerPoint. Además
							 te brinda almacenamiento en la Nube,
							 Skype, y acceso en todo momento
							 y lugar.</li><br>
                          	<li>Windows Store: con las mejores
							  Apps en juegos, música y películas.
							  Descargá una película en tu celular
							  y mirala en la computadora de casa. </li><br>
                          </ul></p>
                         </div>

                    </div>

                  </div>
                  </div>
                  <div class="col-md-3" >
                      <div class="thumbnail">
                        <img src="img/th_04.jpg" alt="...">
                        <div class="logo_thumb img-responsive"><img src="img/logo_thumb_04.png" alt=""></div>
                        <div class="caption">
                          <h3>Hacé cosas de</h3>
                          <h4>forma natural</h4>

                          <p>Está diseñadopara adaptarse a vos.
                         </div>

                        <span class="glyphicon glyphicon glyphicon-plus-sign" id="tCuatro"></span>


                    </div>
                      <div class="col-md-12 oculto" id="col4" style="padding:0px;">
                      <div class="thumbnail">
                        <div class="caption">
                          <p><ul>
                          	<li>El único sistema operativo que
 							 entrega una experiencia natural
 							 del usuario, ya que permite trabajar
 							 con mouse y teclado, touch, lapicera
 							 o voz. </li><br>
                          	<li> Se adapta a cualquier dispositivo:
							  teléfono, tablet, desktop y laptop,
							  para que tengas todos tus archivos
							  en todos tus equipos. </li><br>
                          	<li>Las mejores Apps universales es
							 tus dispositivos. Manejá cuentas,
							 música, videos y conectate con
							 la Nube para un acceso permanente. </li><br>
                          </ul></p>
                         </div>


                    </div>

                  </div>
                  </div>

                 </div>
              </div>
  </section>
  <a href="http://www.microsoft.com/es-ar/windows/windows-10-upgrade" target="_blank"><div class="conoce"> <h5> Descargá Windows 10 gratis* haciendo clic aquí</h5></div></a>
	<a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><div class="quiero"><h5>Quiero adquirir un dispositivo con Windows 10</h5></div></a>
	<div class="collapse" id="collapseExample">
	  <div class="well">
	  	<div>
	  		<p id="parrafo-collapse">Conseguí tu equipo Windows 10 en el comercio de tecnología o electrodomésticos de confianza.</p>
	  	</div>
	  		<div class="row">
				<div id="demo-12-col" class="col-md-12">
	    			<div class="col-md-2 col-md-offset-1">

	    			  <a href="http://www.carrefour.com.ar/" ><img class="img-responsive  " src="img/logos/carrefour.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			  <a href="http://www.cetrogar.com.ar/"><img class="img-responsive " src="img/logos/cetrogar.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			 <a href="https://www.compumundo.com.ar/windows-10"><img class="img-responsive " src="img/logos/compumundo.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			  <a href="http://www.falabella.com.ar/falabella-ar/"><img class="img-responsive " src="img/logos/falabella.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			  <a href="http://www.fravega.com/landing/windows10"><img class="img-responsive " src="img/logos/fravega.jpg"></a>	    			</div>
    	    	</div>
    	    </div>


	    	<div class="row">
	    		<div id="demo-12-col" class="col-md-12">
	    			<div class="col-md-2 col-md-offset-1">
	    			  <a href="https://www.garbarino.com/windows10"><img class="img-responsive " src="img/logos/garbarino.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			 <a href="https://www.megatone.net/"><img class="img-responsive " src="img/logos/megatone.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			  <a href="http://www.musimundo.com/Contenidos/llego-windows-10/249"><img class="img-responsive " src="img/logos/musimundo.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
	    			  <a href="http://www.naldo.com.ar/"><img class="img-responsive " src="img/logos/naldo.jpg"></a>
	    			</div>
	    			<div class="col-md-2">
<!-- 	    			  <a href="http://www.musimundo.com/Contenidos/llego-windows-10/249"><img class="img-responsive " src="img/logos/musimundo.jpg"></a>
 -->
	    				<a href="#"><img class="img-responsive " src="img/logos/ribeiro.jpg"></a>
	    			</div>
	    		</div>
	    	</div>

	    	<div class="row">
	    			<div id="demo-12-col" class="col-md-12">
	    				<div class="col-md-2 col-md-offset-1">
	    				  <a href="http://www.rodo.com.ar/"><img class="img-responsive " src="img/logos/rodo.jpg"></a>
	    				</div>
	    				<div class="col-md-2">
	    				 <a href="http://www.walmart.com.ar/"><img class="img-responsive" src="img/logos/walmart.jpg"></a>
	    				</div>
	    				<div class="col-md-2">
	    					    				<!--   <a href="#"><img class="img-responsive " src="img/logos/ribeiro.jpg"></a> -->

	    				</div>
	    				<div class="col-md-2">
	    				<!--   <a href="#"><img class="img-responsive " src="img/logos/ribeiro.jpg"></a> -->
	    				</div>
	    				<div class="col-md-2">
	    				</div>
	    		</div>
	    	</div>

	  </div>
	</div>

		<div class="condicinoes">
			<h6>* Oferta válida para dispositivos con Windows 7 SP1 y Windows 8.1 por un año desde el29 de julio de 2015. Los términos y condiciones aplicables a la<br> referida actualización se encuentran disponibles en: <a href="#">[aka.ms/win10actualizacion]</a>. Consultar requisitos técnicos para actualizar a Windows 10 <a href="#">aquí.</a></h6>
		</div>
	<?php
		require 'footer.php';
	?>
