<?php

/*
Template Name: impact
*/

?>
<?php get_header(); ?>

	<div id="primary" class="content-area-impact">
		<main id="main" class="site-main-impact" role="main">
        <h1>impact report</h1>
        <div class="hero-image-impact"></div>
        
                    <!-- Slideshow container -->
            <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
            <div class="numbertext">1 / 2</div>
            <div class="test"></div>
            <div class="text">india</div>
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 2</div>
            <div class="test2"></div>
            <div class="text">uganda</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
        
        <div class="see-reports-wrapper">
            <section class="see-reports">
                <p>See how we are tracking in each region by reviewing our annual report for 2016 - 17.</p><br>
                <p>For old reports, go here</p>
            </section>
        </div>

        <section class="videos-impact">
            <embed width="420" height="315"src="https://www.youtube.com/embed/tgbNymZ7vqY"> 
            <embed width="420" height="315"src="https://www.youtube.com/embed/tgbNymZ7vqY">
        </section>
        
        <section class="news-title">news</section>  
            
            <div class = "news  -container">
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
                        
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <div class = "new-impact"  style="background-image: url(<?php the_post_thumbnail_url(); ?>)"><a href="<?php the_permalink(); ?>">
                            <div class="text-area-news">
                            <h2><a class="title-area-news" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <a class="arrow-link-news" href="<?php the_permalink(); ?>">></a></h2>
                            </div>
                        </a></div>
                        <?php else : ?>
                        <br>
                        <div class="news-nophoto-wrapper">
                            <div class="news-nophoto-area">
                                <a class="news-nophoto" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <a class="arrow-link-news-nophoto" href="<?php the_permalink(); ?>">></a></h2>
                            </div>
                        </div>

                        <?php endif; ?>

                    <?php endwhile; ?>
                    
                    <div class="load-more-area">
                        <a class="load-more">Load more</a>
                    </div>
                    
                    <?php wp_reset_postdata(); ?>
                    
                <?php else : ?>
                <h2>Nothing found!</h2>
                <?php endif; ?>
            </div>

<?php get_footer(); ?>