<?php

#En el Index mostraremos la salida de las visitas al usuario y tambien a traves de el enviaremos las distintas acciones que el usuario envie al controlador.
require_once "autoload.php";
require_once "controladores/inicioController.php";
require_once "controladores/errorController.php";
require_once "modelo/modelo.php";
require_once "config/parameters.php";
//require_once 'vista/template.php';



$mvc = new MvcController();
$mvc -> plantilla();
//$mvc -> nosotros();


//NUEVAS FUNCIONALIDADES
//   function show_error(){
//  	$error = new errorController();
//   	$error->index();
//   }

//   if(isset($_GET['controller'])){
//   	$nombre_controlador = $_GET['controller'].'Controller';

//   }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
//       $nombre_controlador = controller_default;
//   }else{
//       show_error();
//   	exit();
//   }

//   if(class_exists($nombre_controlador)){	
//   	$controlador = new $nombre_controlador();
	
//   	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
//   		$action = $_GET['action'];
//   		$controlador->$action();
//   	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
//   		$action_default = action_default;
//   		$controlador->$action_default();
//   	}else{
//   		show_error();
//   	}
//   }else{
//   	show_error();
//   }
//NUEVAS FUNCIONALIDADES

?>