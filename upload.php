<?php
include_once "config.php";
include_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$query = "SELECT email FROM `hacegrandescosas`.`usuario`;";
	$res = mysqli_query($db, $query);
	$fila = mysqli_fetch_array($res);

	$nombre = strip_tags(trim($_POST["firstAndLast"]));
	$nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$video = filter_var(trim($_POST["video"]), FILTER_VALIDATE_URL);
	$legal = $_POST["legal"];
	if (isset ($_POST['news'])){
  	$news = $_POST ['news'];
  } else {
  	$news = 0;
  }

	if ($nombre == '' OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR !filter_var($video, FILTER_VALIDATE_URL)) {
		http_response_code(400);
		echo "Oops! Existen campos obligatorios vacios";

	}else if ($fila['email'] == $_POST["email"]){
		http_response_code(400);
	 	echo "El mail ya existe en nuestra base";
 	}else if ($_POST["legal"] !== '1'){
		http_response_code(400);
	 	echo "Debes aceptar las Bases y Condiciones";
 	}else{

		include_once "vendor/autoload.php";

		$nombre = explode (" ", $_POST['firstAndLast']);

		$html = 'Nuevo video subido por ' . $_POST['email'] . '<br/><br/>'
						. $nombre[0] . ' ha subido su video.<br/><br/>'
						. 'Ingresa en la siguiente direcci&oacute;n para ver y confirmar la subida: <a href="http://www.hacegrandescosas.com/preview/confirmacion-step1.php?nombre='.base64_encode($nombre[0]).'&apellido='.base64_encode($nombre[1]).'&email='.base64_encode($_POST['email']).'&video='.base64_encode($_POST['video']).'&comentarios='.base64_encode($_POST['comentarios']).'&news='.$_POST['news'].'">Confirmar Video</a>';

		// This is your From email address
		$from = array(
			$_POST['email'] => 'uploadYou'
		);
		// Email recipients
		$to = array('guillermonovillo@gmail.com'=>'Destination 1 Name'
								// 'marina.ramella@wunderman.com'=>'Destination 2 Name'
								);
		// Email subject
		$subject = 'Nuevo video subido - pendiente de moderacion';

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
		if ($recipients = $swift->send($message, $failures))
		{
			http_response_code(200);
			echo "*Gracias por compartir tu video. Te avisaremos cuando esté disponible para que lo veas. ";
		}
		// something went wrong =(
		else
		{
			http_response_code(500);
			echo "Oops! Something went wrong and we couldn't send your message.";
		}
	}
}else {
		// Not a POST request, set a 403 (forbidden) response code.
		http_response_code(403);
		echo "<h1>Oops! Aqui no hay nada.</h1>";
}

function form_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
