<?php
/**
 * Template name: Blog
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php 
        $args = array( 'post_type' => 'post');
        $posts = new WP_Query( $args );  ?>
        
            <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
                <img class="post-img" src="" />
                <a href=<?php the_permalink(); ?>><h1><?php the_title(); ?></h1></a>
                <div class="post-ex"><?php the_excerpt(); ?></div>

            <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
