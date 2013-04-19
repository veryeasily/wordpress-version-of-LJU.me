<?php get_header(); ?>


	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

              <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('header')) : else : ?>

              <div class="pre-widget">
                  <p><strong>Widgetized Header</strong></p>
                  <p>This panel is active and ready for you to add some widgets via the WP Admin</p>
              </div>

              <?php endif; ?>


<?php get_footer(); ?>
