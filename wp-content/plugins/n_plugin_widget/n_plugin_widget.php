<?php

/*

Plugin Name: plugin widget
Plugin URI: www.pacificoholding.com/doris
Description: Este es un plugin de prueba
Version: 1.0
Author: Jeans
Author URI: www.pacificoholding.com/smart_pagina
License: GPL2
*/

require_once("c_widget_class.php");

add_action("widgets_init","c_widget_carga");

if(!function_exists("c_widget_carga"))
{
	function c_widget_carga()
	{
		register_widget("c_widget_class");
	}
}