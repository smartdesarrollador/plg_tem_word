<?php
/*Template Name: plantilla entrada */ ?>


<?php get_header(); ?>
<div class="container">
   <div class="">
 <?php if (have_posts()) : 
             while (have_posts()) :the_post();  ?>
                
                  <h1><?php the_title(); ?></h1>

               <h3><?php  the_content(); ?></h3>  
 <?php       endwhile;
       endif;
?>
    </div>
</div>


<?php get_footer(); ?>