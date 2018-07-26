<?php
/**
 * Template Name: Application
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

                <?php the_post_thumbnail(); ?>
                <h1 class="app-title">Expedition Application</h1>
				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
