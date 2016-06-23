<?php get_header(); ?>

 <div class="container">
    <div class="well">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="entrada">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <p class="postmetadata">
                    Por <?php the_author(', '); ?> el <?php the_time('F jS, Y'); ?> en <?php the_category(', ') ?> | <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
                </p>
             <div class="imagen-post-thumbnail">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
             </div>

			<div class="entry-single">
				<?php the_content(); ?>
			</div>

		</div>
        <?php comments_template(); ?>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>pagina no encontrada</h2>

	<?php endif; ?>
	   </div>
    </div>



<?php get_footer(); ?>