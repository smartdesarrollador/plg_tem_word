<?php

/*

Plugin Name: Añadir plugin al Panel
Plugin URI: www.pacificoholding.com/doris
Description: Este es un plugin de prueba
Version: 1.0
Author: Jeans
Author URI: www.pacificoholding.com/smart_pagina
License: GPL2
*/

add_action("admin_menu","c_opciones_de_admin");
add_action("admin_init","c_opciones_de_admin_init");

if(!function_exists("c_opciones_de_admin_init"))
{
	function c_opciones_de_admin_init()
	{
		register_setting("cc-group","cc_opciones_titulo");
		register_setting("cc-group","cc_opciones_description");
	}
}

if(!function_exists("c_opciones_de_admin"))
{
	function c_opciones_de_admin()
	{
		add_options_page("Opciones de mi Plugins","Opciones - Plugin","manage_options","cc","c_get_opciones_de_admin");
	}
}

if(!function_exists("c_get_opciones_de_admin"))
{
	function c_get_opciones_de_admin()
	{
         ?>
                <div class="wpap">
                       <?php  screen_icon() ?><h2>Opciones de mi Plugins</h2>
                       <h3 class="title">Descripcion</h3>
                       <p>Este Plugins permite cargar un titulo y una descripcion como 
                       widget, ha sido creado por ya saben</p>
                     <form method="post" action="options.php">
                          <?php  settings_fields("cc-group")  ?>
                          <?php    @do_settings_fields("cc-group")?>

                          <table class="form-table">
                              <tr valign="top">
                               <th scope="row">
                               	     <label for="cc_opciones_titulo">Título</label>
                               </th>
                               <td>
                               	    <input type="text" name="cc_opciones_titulo" value="<?php echo get_option('cc_opciones_titulo')?>" />
                               	    <br />
                               	    <small></small>
                               </td>
                              	
                              </tr>
                              <tr valign="top">
                               <th scope="row">
                               	     <label for="cc_opciones_description">Descripcion</label>
                               </th>
                               <td>
                               	    <textarea name="cc_opciones_description"><?php echo get_option("cc_opciones_description")?></textarea>
                               	    <br />
                               	    <small></small>
                               </td>
                              	
                              </tr>
                          	
                          </table>
                     	<?php @submit_button() ?>
                     </form>
                </div>

         <?php
	}
}

