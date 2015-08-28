<?php
  require_once 'config.php';
  require_once 'conexion.php';

  $nombre = strip_tags(trim($_POST['nombre']));
	$nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
  $apellido = strip_tags(trim($_POST['apellido']));
	$apellido = str_replace(array("\r","\n"),array(" "," "),$apellido);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$video = $_POST["video"];
  $comentarios = $_POST['comentarios'];
  $comentarios = str_replace(array("\r","\n"),array(" "," "),$comentarios);
  if (isset ($_POST['news'])){
  	$news = $_POST ['news'];
  } else {
  	$news = 0;
  }

  if ($_SERVER['REQUEST_METHOD']=='POST'){
		$query = "INSERT INTO usuario (nombre, apellido, email, video, comentarios, news)
		VALUES ('$nombre', '$apellido', '$email', '$video', '$comentarios', '$news')";
		$exito = mysqli_query ($db, $query);
		if ($exito){
      include_once "vendor/autoload.php";

  		$html = '<b>' . $nombre . '</b> Nos alegra confirmarte que tu video sera subido en breve a nuestra web.<br/><br/>
  						Tambien, queriamos agradecerte por sumarte a este evento.<br/><br/>'
  						. 'Tu video sera subido en la siguiente direccion: <a href="http://www.hacegrandescosas.com/preview/video-preview.php?nombre='.base64_encode($nombre).'&video='.base64_encode($video).'&comentarios='.base64_encode($comentarios).'">Ver video</a><br><br>
              Muchas gracias. <br><br
              >Un saludos Cordial';

  		// This is your From email address
  		$from = array(
  			'guillermonovillo@gmail.com' => 'windows 10'
        // 'marina.ramella@wunderman.com' => 'windows 10'
  		);
  		// Email recipients
  		$to = array($_POST['email']=>'Destination');
  		// Email subject
  		$subject = 'Felicitaciones, tu video ha sido subido en nuestra web';

  		// Login credentials
  		$username = 'azure_8d28eeb9ade620c773b0223f0f899a3e@azure.com';
  		$password = 'KL7nX42a1dzBRES';

  		// Setup Swift mailer parameters
  		$transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
  		$transport->setUsername($username);
  		$transport->setPassword($password);
  		$swift = Swift_Mailer::newInstance($transport);

  		// Create a message (subject)
  		$message = new Swift_Message($subject);

  		// attach the body of the email
  		$message->setFrom($from);
  		$message->setBody($html, 'text/html');
  		$message->setTo($to);
  		$message->addPart($text, 'text/plain');

  		// send message
  		if ($recipients = $swift->send($message, $failures)){
  			http_response_code(200);
  			echo "El video se ha grabado en nuestra base de datos y sera dado de alta en la web en unos minutos. Muchas gracias";
  		}
  		// something went wrong =(
  		else{
  			http_response_code(500);
  			echo "Oops! Something went wrong and we couldn't send your message.";
  	  }
		}
  }else {
  		// Not a POST request, set a 403 (forbidden) response code.
  		http_response_code(403);
  		echo "<h1>Oops! Aqui no hay nada.</h1>";
  }
?>
