<?php
/**
 * Template name: Blog
 *
 * @package WSB_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <?php 
        $args = array( 'post_type' => 'post', 'posts_per_page' => 5);
        $posts = new WP_Query( $args );  ?>
        
            <?php while( $posts->have_posts() ) : $posts->the_post(); ?>

            <div class="post-wrapper">

                <a href=<?php the_permalink(); ?>>
                    <div class="post-container">

                        <div class="img-container">
                            <?php the_post_thumbnail(''); ?>
                            <div class="yellow-strip"></div>
                        </div>

                        <h1 class="post-title"><?php the_title(); ?></h1>

                        <div class="entry-meta">
			                <?php wsb_posted_on(); ?> / <?php comments_number('No comments', '1 comment', '% Comments'); ?> / <?php wsb_posted_by(); ?>
		                </div>
                    </div>
                </a>
                <div class="post-ex"><?php the_excerpt(); ?></div>
                <a class="read-more-post" href=<?php the_permalink(); ?>>Read More</a>
            </div>

            <?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
