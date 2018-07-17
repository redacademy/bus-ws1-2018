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
        <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="text-aside">Annual Impact Report for the year 2016-17.</div>
            <div class="test"></div>
        </div>          
            <div class="mySlides fade">
            <div class="text-aside">Annual Impact Report for the year 2016-17.</div>
            <div class="test2"></div>
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
                <p>See how we are tracking in each region by reviewing our <br><span>annual report for 2016 - 17.</span></p><br>
                <p>For old reports, <span>go here</span></p>
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
                       'posts_per_page' => 7,
                       'order' => 'ASC',
                   );
                   $news = new WP_Query( $args );
               ?>
               <?php if ( $news->have_posts() ) : ?>
                   <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                       
                       <?php if (has_post_thumbnail( $post->ID ) ) : ?>
                       <div class = "new-impact"  style="background-image: url(<?php the_post_thumbnail_url(); ?>)"><a href="">
                           <div class="text-area-news">
                           <h2><a class="title-area-news" href=""><?php the_title(); ?></a>
                           <a class="arrow-link-news" href="">></a></h2>
                           </div>
                       </a></div>
                       
                       <?php endif; ?>
                   <?php endwhile; ?>
                   <?php wp_reset_postdata(); ?>
                   
               <?php else : ?>
               <h2>Nothing found!</h2>
               <?php endif; ?>
        </div>
        
        <div class="link-news-container">
            <a class="link-news-1" href=""></a>
            <a class="link-news-2" href=""></a>
            <a class="link-news-3" href=""></a>
        </div>    

        <div class="news-nophoto-wrapper">
            <div class="news-nophoto-area">
                <a class="news-nophoto" href=""></a>
                <a class="arrow-link-news-nophoto" href="">></a>
           </div>
        </div>  
            
        <div class="load-more-area">
            <a class="load-more">Load more</a>
        </div>
        
<?php get_footer(); ?>