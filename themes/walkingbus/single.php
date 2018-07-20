<?php
/**
 * The template for displaying all single posts.
 *
 * @package wsb_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="post-container">
				<div class="img-container">
					<?php the_post_thumbnail(''); ?>
					<div class="yellow-strip"></div>
				</div>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="entry-meta">
					<?php wsb_posted_on(); ?> / <?php comments_number('No comments', '1 Comment', '% Comments'); ?> / <?php wsb_posted_by(); ?>
				</div>
			</div>
			<div class="post-ex"><?php the_content(); ?></div>
			<?php the_post_navigation(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
