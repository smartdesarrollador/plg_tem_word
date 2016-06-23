<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title(); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/Humanst521_Lt_BT_400.font.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/roundabout.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/gallery_init.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/cufon-replace.js"></script>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="index.html">Design Company</a></h1>
      <nav>
        <ul>
        <li><?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?></li>
        	
        </ul>
      </nav>
    </div>
	</header>
  <!-- #gallery -->
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide3.jpg" alt=""></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide2.jpg" alt=""></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide5.jpg" alt=""></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide1.jpg" alt=""></li>
        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide4.jpg" alt=""></li>
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->


  <div class="main-box">

    <div class="container">
    
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside class="news">
          <h4>
            <?php  get_sidebar()?>
            </h4>
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?>  </small>
   <div class="thumbnail">
      <?php
          if ( has_post_thumbnail() ) { 
                the_post_thumbnail();
          }
      ?>
   </div>
      <?php the_excerpt(); ?>

  <?php endwhile; else: ?>
    <p><?php _e('No hay entradas .'); ?></p>
  <?php endif; ?>
            </article> 
          </section>

        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">Copyright - creado por websoluciones</div>
        <div class="fright"><a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website template</a> designed by TemplateMonster.com&nbsp; &nbsp; |&nbsp; &nbsp; <a href="http://templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com</div>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
