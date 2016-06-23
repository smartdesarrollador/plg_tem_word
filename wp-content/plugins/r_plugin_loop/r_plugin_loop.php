<?php

/*

Plugin Name: mi plugin loop query
Plugin URI: www.pacificoholding.com/doris
Description: Este es un plugin de prueba loop query
Version: 1.0
Author: Jeans
Author URI: www.pacificoholding.com/smart_pagina
License: GPL2
*/


add_filter("the_content","cc_post_contenido_relacionado");

if(!function_exists(cc_post_contenido_relacionado))
{


	function cc_post_contenido_relacionado($content)
	{

		if(!is_singular(post))
		{

			return $content;
		}else
		{
			$categorias=get_the_terms(get_the_ID(),"category");

			$array=array();

			foreach ($categorias as $categoria) {
				$array[]=$categoria->term_id;
			}

          //print_r($array);

			$loop=new WP_Query
			(
                 array
                 (
                 	"category_in"=>$array,
                 	"posts_per_page"=>2,
                 	"post_not_in"=>array(get_the_ID()),
                 	"orderby"=>"rand"

                 )

			);

			if($loop->have_posts())
			{
				$content.="Post Relacionados";
				$content.="<hr />";
				$content.="<ur>";

				while($loop->have_posts())
				{
					$loop->the_post();
					$content.="<li>";
					$content.="<a href='".get_permalink()."'>".get_the_title()."</a>";
					$content.="</li>";
				}

				$content.="</ul>";
			}

			return $content;
		}
	}
}