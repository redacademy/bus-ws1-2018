<?php

/*
Template Name: get involved 
*/
/**
 * The template for displaying products page
 *
 * 
 */

 
?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <!-- displays get involved page banner  -->

          <?php  $images = CFS()->get('get_involved'); 

                foreach ($images as $image) {?>

                    <picture>
                        <?php echo '<img src="'.$image['banner'].'"/>'; ?>
                    </picture>
                        
                <?php }?>
                 

                <?php the_content();?>

                <?php endwhile; ?>

<!-- //TODO : ADD THE CUSTOM FIELD SUITE FOR THE UPCOMMING EXPEDITIONS (CFS BECAUSE THIS PART IS GOING TO BE UPDATED OFTEN ) -->


<!-- displays past expeditions  -->

        <?php
			$args = array( 'post_type' => 'expedition', 'order' => 'ASC', 'posts_per_page' => -1  );
			$expeditions = new WP_Query( $args ); 
		?>
	
		<?php if ( $expeditions ->have_posts() ) : ?> 
		<?php while ( $expeditions ->have_posts() ) : $expeditions ->the_post(); ?>


        <?php $missions = CFS()->get('past_expeditions'); 
            foreach ($missions as $mission) {?>
            
            <div class = "expedition-wrapper">

            <div class = "single-expedition">

                <div class = "expedition-info">

                    <div class = "expedition-image">
                        <picture>
                            <?php echo '<img src="'.$mission['image'].'"/>';?>
                        </picture>    
                    </div>

                    <div class = "expedition-name">
                        <?php  echo the_title();?>
                    </div>   

                </div>  <!-- expedition-info -->

                <div class = "expedition-description">
                    <?php echo CFS()->get.$mission['excerpt'];?>
                </div>   

                </div>

            <?php } ?>
 
          

        <?php endwhile; ?> 

  </div> <!-- expedition-wrapper-->
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        
            <h2>Nothing found!</h2>
        
        <?php endif; ?>


    <!-- display all the team members (all the teams)-->

    <?php
		$args = array( 'post_type' => 'team', 'order' => 'ASC', 'posts_per_page' => -1  );
		$teams = new WP_Query( $args ); 
		?>
	
		<?php if ( $teams ->have_posts() ) : ?>
		<?php while ( $teams ->have_posts() ) : $teams ->the_post(); ?>



        <?php $teamMembers = CFS()->get('members'); 

                        foreach ($teamMembers as $member) {?>

                        <div class = "member-picture">
                        <picture>
                            <?php echo '<img src="'.$member['image'].'"/>';?>
                        </picture>    
                        </div>

                        <div class = "member-name">
                           <?php  echo CFS()->get.$member['name']; ?>
                        </div>     

                        <div class = "member-role">
                            <?php echo CFS()->get.$member['role'];?>
                        </div>   

                        <div class = "member-bio">
                            <?php echo CFS()->get.$member['bio'];?>
                        </div> 

        <?php } ?>
 
 

    <?php endwhile; ?> 


    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    
        <h2>Nothing found!</h2>
    
    <?php endif; ?>



    <?php
		$args = array( 'post_type' => 'research', 'order' => 'ASC', 'posts_per_page' => -1  );
		$thinkTank = new WP_Query( $args );
	?>
	
		<?php if ($thinkTank ->have_posts() ) : ?>
		<?php while ( $thinkTank ->have_posts() ) : $thinkTank ->the_post(); ?>

        	


          <?php   
          $researches = CFS()->get('research'); 
                        foreach ($researches as $research) {?>

                        <div class = "single-research">
 
                            <div class = "research-picture">
                            <picture>
                                <?php echo '<img src="'.$research['image'].'"/>';?>
                            </picture>    
                            </div>

                            <div class = "research-description">
                            <?php  echo CFS()->get.$research['description']; ?>
                            </div>     

                            <div class = "research-subject">
                                <?php echo CFS()->get.$research['subject'];?>
                            </div> 


                        </div>
                       


                          
                        <?php } ?>




                        <!-- custom post type for events -->
 
 

    <?php endwhile; ?> 


    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    
        <h2>Nothing found!</h2>
    
    <?php endif; ?>



			


<?php get_sidebar(); ?>
<?php get_footer(); ?>


