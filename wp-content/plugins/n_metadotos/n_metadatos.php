<?php

/*

Plugin Name: plugin metadatos
Plugin URI: www.pacificoholding.com/doris
Description: Este es un plugin de prueba
Version: 1.0
Author: Jeans
Author URI: www.pacificoholding.com/smart_pagina
License: GPL2
*/

add_action("add_meta_boxes","c_agregar_campo_def");
add_action("save_post","c_guardar_campo");
add_filter("the_content","c_getContent");


if(!function_exists("c_carga_data"))
{
	function c_carga_data()
	{
		$values=get_post_custom($post->ID);

		$campo=esc_attr($values["c_campo"][0]);
		return $campo;
	}
}

if(!function_exists("c_agregar_campo_def"))
{
	function c_agregar_campo_def()
	{
		add_meta_box("c_campo","nuevo campo","c_agregar_campo","post");
	}
}

if(!function_exists("c_agregar_campo"))
{
	function c_agregar_campo()
	{
       ?>

           <label>Nuevo campo </label>
           <input type="text" name="c_campo" id="c_campo" value="<?php echo c_carga_data(); ?>" placeholder="Nuevo Campo" />

       <?php
	}
}

if(!function_exists("c_guardar_campo"))
{
	function c_guardar_campo($post_id)
	{
		if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		{
             return;
		}


       // Check the user's permissions
		if(isset($_POST['post_type']) && 'page' == $_POST['post_type'])
		{
			if(!current_user_can('edit_page',$post_id))
			{
				return;
			}else{
				if(!current_user_can('edit_post',$post_id))
				{
					return;
				}
			}
		}

		$dato=sanitize_text_field($_POST["c_campo"]);
		update_post_meta($post_id,'c_campo',$dato);
	}
}

if(!function_exists("c_getContent"))
{
	function c_getContent($content)
	{
		      if(!is_singular('post'))
	  {
		return $content;
	  }else
	  {
		$content.=c_carga_data();
		return $content;
	  }
	}
	
}