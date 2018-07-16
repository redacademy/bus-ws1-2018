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

 <!--  displays get involved page banner  -->

            <?php  $images = CFS()->get('get_involved'); ?>

                <?php foreach ($images as $image){ ?>

                    <picture>
                        <?php echo '<img src="'.$image['banner'].'"/>'; ?>
                    </picture>
                        
                <?php }?>
               
                <?php the_content();?>

                <?php endwhile; ?>

<!-- //TODO : ADD THE CUSTOM FIELD SUITE FOR THE UPCOMMING EXPEDITIONS (CFS BECAUSE THIS PART IS GOING TO BE UPDATED OFTEN ) -->


<!-- displays past expeditions  -->

    <section class = "past-expeditions">

        <?php
			$args = array( 'post_type' => 'expedition', 'order' => 'ASC', 'posts_per_page' => -1  );
			$expeditions = new WP_Query( $args ); 
		?>
	
		<?php if ( $expeditions ->have_posts() ) : ?> 
		<?php while ( $expeditions ->have_posts() ) : $expeditions ->the_post(); ?>


        <?php $missions = CFS()->get('past_expeditions'); 
            foreach ($missions as $mission) {?>
            
                <div class = "single-expedition">

                    <div class = "expedition-info">

                        <div class = "expedition-image">
                            <!-- <picture> -->
                            <?php echo '<img src="'.$mission['image'].'"/>';?>
                            <!-- </picture>     -->

                            <div class = "expedition-name" id = "expedition-name">

                                <div class = "name-wrapper"> 

                                    <div class = "expedition-title">
                                        <p> <?php  echo the_title();?> </p>
                                        <i class="fas fa-angle-down"></i>
                                    </div> <!-- expedition-title -->

                                </div> <!--  name-wrapper -->

                            </div>   <!--expedition-name -->


                            <div class = "expedition-description" id= "expedition-description">
                                
                                <div class= "expedition-content"> 

                                    <span class = "excerpt-wrapper">
                                        <p>  <?php echo CFS()->get.$mission['excerpt'];?></p>
                                    </span>

                                    <span class = "button-wrapper">
                                        <a href = "<?php the_permalink();?>"> <button> read more</button></a>
                                    </span>

                                </div>  <!--expedition-content-->  

                            </div> <!-- expedition-description-->


                        </div> <!--expedition-image -->


                     </div> <!--expedition-info -->

                </div> <!--single-expedition -->    

                <?php } ?>
                <?php endwhile; ?> 

     </section> <!-- expedition-wrapper-->

    <?php wp_reset_postdata(); ?>
    <?php else : ?>
                            
    <h2>Nothing found!</h2>
                            
    <?php endif; ?>


    <!-- TODO insert list of sponsors in a list (custom field loop)-->

     <section class = "sponsors">
                            
         <p>  Our expeditions are proudly supported by socially conscious brands and research organizations around the world. It’s an honour to work with you.</p>

<div class = "sponsors-logos">
 
</div>


    </section>


<!-- display all the team members (all the teams)-->


    <section class = "wsb-team">

        <?php
            $args = array( 'post_type' => 'team', 'order' => 'ASC', 'posts_per_page' => -1  );
            $teams = new WP_Query( $args ); 
        ?>
                        
        <?php if ( $teams ->have_posts() ) : ?>
        <?php while ( $teams ->have_posts() ) : $teams ->the_post(); ?>
        <p> <?php the_title()?> </p>

        
        <ul class = "team-type"> 
                        

            <?php $teamMembers = CFS()->get('members'); 


                foreach ($teamMembers as $member) {?>

                    <li class = "single-member">

                        <div class = "member-thumbnail" id = "image">

                            <div class = "member-name">                  
                                <?php  echo CFS()->get.$member['name']; ?>
                            </div>  <!-- member-name -->

                            <div class = "member-picture">
                                 <?php echo '<img src="'.$member['image'].'"/>';?>
                            </div>


                           

                            <div class = "member-info" id = "info">

                                 <div class = "icon-wrapper"> 
                                <i class="fas fa-times"></i>
                            </div>

                                <p> <?php  echo CFS()->get.$member['name']; ?> </p> 
                                <p> <?php echo CFS()->get.$member['role'];?></p> 
                                                    <p>  <?php echo CFS()->get.$member['bio'];?></p> 

                                                </div>    <!--member-info-->   
                                        
                                        </div> <!--member-thuimbnail-->   

                                    </li>   <!--single-member -->

                                

                            <?php } ?>
                    
    </ul>

    <?php endwhile; ?> 

 
    


    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    
        <h2>Nothing found!</h2>
    
    <?php endif; ?>

    </div> <!-- carousel-->

    </div> <!-- wsb-team-->


    <div class = "research">



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
                            <?php //  echo CFS()->get.$research['description']; ?>
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


</div>

<?php get_footer(); ?>


