<?php
	$peticionAjax = false;
	require_once "./controladores/vistasControlador.php";
	$iv = new vistasControlador();
	$vistas = $iv->obtener_vistas_controlador();
?>

<?php
	if($vistas != "login" && $vistas != "404"){
		//include "./vistas/inc/header.php";
		require_once "./vistas/inc/header.php";
	}
?>

<?php
	if($vistas == "login" || $vistas == "404"){
		include "./vistas/contenidos/".$vistas."-view.php";
	}else{
		include $vistas;
	}
?>

<?php
	if($vistas != "login" && $vistas != "404"){
		//include "./vistas/inc/footer.php";
		require_once "./vistas/inc/footer.php";
	}
?>