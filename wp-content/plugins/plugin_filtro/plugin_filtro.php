

<?php

/*

Plugin Name: plugin filtro
Plugin URI: www.pacificoholding.com/doris
Description: Este es un plugin de prueba
Version: 1.0
Author: Jeans
Author URI: www.pacificoholding.com/smart_pagina
License: GPL2
*/

add_filter("the_title","modificar_titulo");

if(!function_exists("modificar_titulo")){

	function modificar_titulo($titulo){

		return "<h3 style='color:red'>".$titulo."</h1>";

	}
}

add_filter("the_content","modificar_contenido");

if(!function_exists("modificar_contenido")){

	function modificar_contenido($contenido){

		return "<h4 style='color:blue'>".$contenido."</h4>";

	}
}

?>

