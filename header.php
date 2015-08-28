<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $_tituloPagina;?></title>
	<!--HOJAS DE ESTILO-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/font_css.css" />
	<link rel="stylesheet" href="assets/scrolling-nav.css" />
	<link rel="stylesheet" href="assets/carrousel.css" />
	<link rel="stylesheet" href="assets/style_type.css" />

	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1450847648579425',
			xfbml      : true,
			version    : 'v2.4'
		});
	};

	(function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	 }(document, 'script', 'facebook-jssdk'));
	</script>


	<div id="fb-root"></div>
	<header>

		<nav class=" navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#items_de_navbar">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">
						<img src="img/windows.png" alt="">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="items_de_navbar">
					<ul class="nav navbar-nav">
						<?php if (strpos($_SERVER['REQUEST_URI'], "videos.php") == 0) {?>
						<li><a class="page-scroll" href="#home">HOME</a></li>
						<li><a class="page-scroll" href="#ver_videos">VER VIDEOS</a></li>
						<li><a class="page-scroll" href="#w_10">CONOCE WINDOWS 10</a></li>
						<?php } ?>
						<li><a class="page-scroll" href="#" class="btn" data-toggle="modal" data-target="#exampleModalb" data-whatever="@mdo">BASES Y CONDICIONES</a></li>
					</ul>

				</div>
			</div>
		</nav>

	</header>
