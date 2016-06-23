<?php
    // funcion para habilitar la opcion para subir imagenes destacadas a cada post
      add_theme_support( 'post-thumbnails' ); 
     


     /*  funcion sidebar
         template: plantilla sidebar  */

     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => "<div class='well'>",
            'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));

      /* fin funcion sidebar */



      /* Registro del menú de WordPress
        Ubicacion: header           */

add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'principal'
        )
    );
}

/* fin Registro del menú de WordPress     */


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );





     ?>


