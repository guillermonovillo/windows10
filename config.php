<?php
//desactivar los notice de php
//desactivar todos los mensajes se hace con E_NONE o ~E_ALL
error_reporting(E_ALL & ~E_NOTICE);
session_start ();
header ("Content-Type: text/html; charset=utf-8");

