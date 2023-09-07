<?php

require_once'../autoload.php';
require_once'../lib/Route.php';

use Lib\Route;

Route::get('/',function(){
   echo 'hola desde la pagina principal';
}); 

Route::get('/contact',function(){
   echo 'hola desde la pagina de contacto';
}); 

Route::get('/about',function(){
   echo 'hola desde la pagina acerca de';
}); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">     
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Unico punto de acceso</h1>
</body>
</html>