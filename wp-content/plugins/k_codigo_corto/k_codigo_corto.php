<?php

/*

Plugin Name: k codigo corto
Plugin URI: www.pacificoholding.com/doris
Description: Este es un plugin de prueba de codigo corto
Version: 1.0
Author: Jeans
Author URI: www.pacificoholding.com/smart_pagina
License: GPL2
*/

add_action('init','cc_codigo_corto');
add_action('init','cc_obtener_valor');

if(!function_exists("cc_codigo_corto"))
{
	function cc_codigo_corto()
	{
		add_shortcode('cesar','codigo_corto');
	}
}

if(!function_exists("codigo_corto"))
{
	function codigo_corto($args,$content)
	{
		//return "<hr /><strong>".$content."</strong>";

		 $num1=$args["num1"];
		 $num2=$args["num2"];
		 $suma=$num1+$num2;

		 return "<hr />num1=".$num1."<br />num2=".$num2."<br />La suma es: ".$suma;


	}
}

/* funciones cc_obtener_valor  */

if(!function_exists("cc_obtener_valor"))
{
	function cc_obtener_valor()
	{
		add_shortcode('obtener','obtener_valor');
	}
}

if(!function_exists("obtener_valor"))
{
	function obtener_valor()
	{
		//return "<hr /><strong>".$content."</strong>";

		if(get_option("cc_opciones_titulo")){


                $valor="<img src='".get_option("cc_opciones_titulo")."' class='img-circle' alt='Cinque Terre' width='304' height='236'>";

 


                 
		}else{
			$valor="";
		}

		
		 

		 return "<hr />".$valor;


	}
}

/* fin  funciones cc_obtener_valor  */