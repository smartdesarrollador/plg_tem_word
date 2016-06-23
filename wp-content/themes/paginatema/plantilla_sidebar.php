<?php
/*Template Name: plantilla sidebar */ ?>


<?php get_header(); ?>


  <div class="container">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
	<?php endif; ?>
</div>
   


<?php get_footer(); ?>













