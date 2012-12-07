<?php
	include_once('../models/categoria.php');
    session_start();
	
	/*Cargar todas las categorias que esten en la base de datos*/
	$categoria = new Categoria();
	
	$lista = $categoria->busca_todos();
	include_once("../views/index.php");
?>
