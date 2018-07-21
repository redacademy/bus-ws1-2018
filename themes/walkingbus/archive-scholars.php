<?php
/**
 * Template name: Scholars
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : the_post(); ?>

        <?php 
            
        ?>

            <header class="page-header">
                <?php
                    the_title( '<h1 class="page-title">', '</h1>' );
                    print(get_the_content());
                ?>
            </header>

			<!-- .page-header -->

            <?php 
            $args = array( 'post_type' => 'Scholars', 'posts_per_page' => -1);
            $scholars = new WP_Query( $args );  ?>


			<?php /* Start the Loop */ ?>
			<?php while ( $scholars->have_posts() ) : $scholars->the_post(); ?>

				<?php
                    the_title();
                    the_content();
                    the_post_thumbnail();
				?>
                <?php wp_reset_query(); ?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>






