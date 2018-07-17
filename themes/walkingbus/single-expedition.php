<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<section class="hero-image-exp">
			<div class="blk-ovr"></div>
			<img src=<?php echo CFS()->get('banner_image'); ?> />
			<h1 class="expedition-title"><?php the_title(); ?></h1>
		</section>

			<div class="expedition-content"><?php the_content(); ?></div>

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
