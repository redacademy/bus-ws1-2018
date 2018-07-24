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
                <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
                <div class="page-description"><?php the_content(); ?></div>
            </header>

			<!-- .page-header -->

            <?php 
            $args = array( 'post_type' => 'Scholars', 'posts_per_page' => -1);
            $scholars = new WP_Query( $args );  ?>

            <div class="slider-for scholars">

			<?php while ( $scholars->have_posts() ) : $scholars->the_post(); ?>

                <div class="scholar-container">

                    <?php the_post_thumbnail(); ?>

                </div>
			
			<?php endwhile; ?>

            </div>
            
            <div class="slider-nav">

                <?php while( $scholars->have_posts() ) : $scholars->the_post(); ?>
                    
                    <?php the_post_thumbnail(); ?>
                
                <?php endwhile; ?>

            </div>

            <div class="one-time scholars">

                <?php while( $scholars->have_posts() ) : $scholars->the_post(); ?>

                    <div class="scholar-info">
                        <h1 class="scholar-name"><?php the_title(); ?></h1>
                        <div class="scholar-bio"><?php the_content(); ?></div>
                    </div>

                <?php endwhile; ?>

            </div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>






