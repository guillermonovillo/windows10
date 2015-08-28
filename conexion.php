<?php

define ("DB_HOST", "us-cdbr-azure-northcentral-a.cleardb.com");
define ("DB_USER", "be0daf8bdba191");
define ("DB_PASS", "74f531ef");
define ("DB_BASE", "hacegrandescosas");

$db = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_BASE);

//imprimir en pantalla si hay un error en base de datos
//die es una funcion que termina el proceso de la web
if (! $db){
	die ("Error al conectar con My SQl");
/*CON REQUIRE HAREMOS DIRECCIONAR LA WEB SI NO FUNCIONA LA BASE DE DATO
require "../proyecto_guillermo/index.php";
exit;*/
}

//para ocultar errores se utiliza errorreporting
?>
