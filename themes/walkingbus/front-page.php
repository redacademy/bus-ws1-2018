<?php
/**
 * The Main Home Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<main class="page-content">
    <header class="page-content-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
    </header><!-- .page-content-header -->

    <section class="home-description">
        <header>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </header>
    </section>

    <section class="home-donate">
        <div>
            <a class="donate-button" href="donate/">Donate</a>
        </div>
    </section>

    <section class="home-about">
        <header>
            <h2>About</h2>
        </header>
        <div>
            <?php echo CFS()->get('home_about_session'); ?>
        </div>
        <footer>
            <a class="learn-more-button" href="what-we-do/">Learn More</a>
        </footer>
    </section>

    <section class="home-video">
        <header class="screen-reader-text">
            <h2>Video</h2>
        </header>
        <div class="video-container">
            <?php echo CFS()->get('home_video'); ?>
        </div>
    </section>

    <section class="home-impact">
        <header>
            <h2>Impact</h2>
        </header>
        <div>
            <?php echo CFS()->get('home_impact_session'); ?>
        </div>
    </section>

    <section class="home-infographic">
        <header class="screen-reader-text">
            <h2>Infoghaph</h2>
        </header>
        <div class="infographic-container">
            <?php
                $query_args = array( 
                    'post_type' => 'countries', 
                    'orderby' => 'menu_order', 
                    'order' => 'ASC'
                );
                $contries_posts = get_posts( $query_args ); // returns an array of posts
            ?>
            <?php if ( !empty( $contries_posts ) ) : ?>
            <?php foreach ( $contries_posts as $post ) : setup_postdata( $post ); ?>
                <article class="infographic-contry">
                    <header>
                        <h2><?php the_title(); ?></h2>
                    </header>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <footer>
                        <a class="learn-more-button" href="what-we-do/">Learn More</a>
                    </footer>
                </article>
            <?php endforeach; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="home-goal">
        <header>
             <h2>Help us reach our goal</h2>
             <h3 data-text="<?php echo CFS()->get('home_goal_final_year'); ?>"><?php echo CFS()->get('home_goal_final_year'); ?></h3>
        </header>
        <div>
            <div id="myProgress" class="goal-progress">
                <div id="progress-bar" class="progress-bar" data-progress="<?php echo CFS()->get('home_goal_percentage'); ?>">
                    <div id="progress-bar-text" class="progress-bar-text"><?php echo CFS()->get('home_goal_percentage'); ?>%</div>
                </div>
            </div>
            <div class="goal-reached">
                <?php echo CFS()->get('home_goal_reached_msg'); ?>
            </div>
        </div>
        <footer>
            <a class="get-involved-button" href="get-involved/">Get Involved</a>
        </footer>
    </section>

</main>

<script>
        
    var $j = jQuery.noConflict();

    $j(function() {

    var isMovingTheBus = false;
    var moveTheBusToProgressFunction = function() {
        $j('#myProgress').off('appear', moveTheBusToProgressFunction);
        if(isMovingTheBus) {
            return;
        }
        isMovingTheBus = true;

        var elem = document.getElementById('progress-bar'); 
        if(!elem) {
            return;
        }

        var width = 1;
        var endProgress = elem.getAttribute('data-progress');

        setTimeout(function(){
            var id = setInterval(frame, 16);
            function frame() {
                if (width >= endProgress) {
                    $j('#progress-bar-text').show(200);
                    clearInterval(id);
                } else {
                    width++; 
                    elem.style.width = width + '%'; 
                }
            }
        }, 1000);
    }

    $j.appear('#myProgress');
    $j('#myProgress').on('appear', moveTheBusToProgressFunction);

    $j('.infographic-container').slick();


    });

</script>


<?php get_footer(); ?>
