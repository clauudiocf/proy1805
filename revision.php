
<?php

session_start();

$PATH='lib/';

include $PATH.'Conexion.php';
include $PATH.'Usuario.php';

$oUsr=new Usuario();

$oUsr->nombre='flopez';
$oUsr->clave='1234';

if($oUsr->VerificaUsuarioClave())
   $_SESSION('USR')=$oUsr;

header('location: http://localhost:8081/proy1605/');


?>
