<?php
/**
 * The post template
 */

get_header(); ?>

	<div id="main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // End of while have_posts ?>

	</div><!-- #main -->

<?php get_footer(); ?>
