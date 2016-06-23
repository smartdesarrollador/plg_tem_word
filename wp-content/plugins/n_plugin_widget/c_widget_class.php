<?php
class c_widget_class extends WP_Widget
{
	public function __construct()
	{
		$opciones=array
		(
            "classname"=>"miclasecss",
            "description"=>"Descripcion de mi widget"
		);

		$this->WP_Widget('css_id','Mi widget',$opciones);
	}

	public function form($instance)
	{
          $defaults=array(
          	      "titulo"=>"lenguaje de Programacion"
          	);

          $instance=wp_parse_args((array)$instance,$defaults);
          $titulo=esc_attr($instance["titulo"]);

          ?>
           <p>Titulo:<input type="text" name="<?php echo $this->get_field_name('titulo')?>" value="<?php echo $titulo?>"
           class="widefat" /></p>

          <?php
	}

	public function update($new_instance,$old_instance)
	{
            $instance=$old_instance;
            $instance["titulo"]=strip_tags($new_instance["titulo"]);
            return $instance;
	}

	public function widget($args,$instance)
	{
          extract($args);
          $titulo=apply_filters('widget_title',$instance['titulo']);
          echo $before_widget;
          echo $before_title.$titulo.$after_title;
          ?>

          <ul>

              <li>PHP</li>
              <li>JAVA</li>
              <li>.NET</li>
              <li>RUBY</li>
          </ul>

          <?php

          echo $after_widget;
	}
}




?>