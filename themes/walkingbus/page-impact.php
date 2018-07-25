<?php

/*
Template Name: impact
*/

?>
<?php get_header(); ?>

	<div id="primary" class="content-area content-area-impact">
	<main id="main" class="site-main site-main-impact" role="main">
    
        <div class="title-image-impact-wrapper">
            <h1>impact report</h1>
            <div class="hero-image-impact-wrapper">
                <div class="hero-image-impact">
                </div>
            </div>
        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container-impact">
        <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="text-aside">Annual Impact Report for the year 2016-17.</div>
            <div class="uganda-slide"></div>
        </div>          
            <div class="mySlides fade">
            <div class="text-aside">Annual Impact Report for the year 2016-17.</div>
            <div class="india-slide"></div>
        </div>
        <!-- Next and previous buttons -->
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div><br>

        <div class="popsicles-desktop-container">
            <div class="popsicle-desktop popsicle-desktop-india"></div>
            <div class="text-aside-desktop">Annual Impact Report for the year 2016-17.</div>
            <div class="popsicle-desktop popsicle-desktop-uganda"></div>
        </div>

        <div class="see-reports-wrapper">
            <section class="see-reports">
                <p>See how we are tracking in each region by reviewing our <br><span><a href="">annual report for 2016 - 17.</a></span></p><br>
                <p>For old reports, <span><a href="">go here</a></span></p>
            </section>
        </div>

        <section class="videos-impact">
            <div><?php echo CFS()->get('video1'); ?></div>
            <div><?php echo CFS()->get('video2'); ?></div>
        </section>

        <div class="news-title-container">
            <section class="news-title">news</section>  
        </div>
            
        <div class = "news-container">
               <?php
                   $args = array(
                       'post_type' => 'news',
                       'posts_per_page' => 15,
                       'order' => 'ASC',
                   );
                   $news = new WP_Query( $args );
               ?>
               <?php if ( $news->have_posts() ) : ?>
                   <?php while ( $news->have_posts() ) : $news->the_post(); ?>                       
                       <section class = "new-impact"  style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
                        </section>
                       
                       <div class="text-area-news">
                            <?php $article_url = CFS()->get('article_url');?>
                            <?php echo $article_url ?>
                           <h2><p class="title-area-news" href=""><?php the_title(); ?></p>
                           <span class="arrow-link-news" href="">&#10093;</span></h2>
                </div>

                   <?php endwhile; ?>
                   <?php wp_reset_postdata(); ?>
               <?php else : ?>
               <h2>Nothing found!</h2>
               <?php endif; ?>               
        </div>
            
        <div class="load-more-area">
            <i class="loadmore-impact-btn">load more</i>
        </div>

<?php get_footer(); ?>