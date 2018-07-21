<?php

/*
Template Name: get involved 
*/
 
?>

<?php get_header(); ?>

<div id="primary" class="content-area">

<div class = "expeditions-content-wrapper"> 

    <div class = "expeditions-container"> 

    <!-- <main id="main" class="site-main" role="main"> -->

        <?php while ( have_posts() ) : the_post(); ?>

 <!--  displays get involved page banner  -->

        <div class = "expeditions-banner-wrapper"> 

            <?php  $images = CFS()->get('get_involved'); ?>

            <?php foreach ($images as $image){ ?>

                <picture>
                    <?php echo '<img src="'.$image['banner'].'"/>'; ?>
                </picture>
                            
            <?php }?>
                
            <?php the_content();?>

            <?php endwhile; ?>

        </div><!-- expeditions-banner-wrapper-->

<!-- // upcoming expedition custom post type  -->

<section class = "upcoming-expedition">

    <?php
		$args = array( 'post_type' => 'upcoming_expedition', 'order' => 'ASC', 'posts_per_page' => -1  );
		$upcomingExpeditions = new WP_Query( $args ); 
    ?>
	
	<?php if ( $upcomingExpeditions  ->have_posts() ) : ?> 
    <?php while ( $upcomingExpeditions  ->have_posts() ) : $upcomingExpeditions  ->the_post(); ?>
        
        <?php $nextMissions = CFS()->get('upcoming_expedition'); 
        foreach ($nextMissions as $nextMission) {?>

                <div class = "section-title">
                    <p> <?php  echo the_title();?> </p>
                </div>  

                <div class = "upcoming-expedition-wrapper">

                    <div class = "map-wrapper">

                        <?php echo '<img src="'.$nextMission['map'].'"/>';?>
                    
                
                        <div class = "upcoming-expedition-info">

                            <div class = "expedition-details">
                                <p>  <?php echo CFS()->get.$nextMission['date'];?></p>
                                <p>  <?php echo CFS()->get.$nextMission['location'];?></p>
                            </div>    

                            <div class = "expedition-description">
                                <p>  <?php echo CFS()->get.$nextMission['info'];?></p>
                            </div>

                        </div> <!-- up-comming-expedition-info -->

                    </div> <!-- map-wrapper -->

                </div> <!-- upcoming-expedition-wrapper -->
        <?php } ?>


    <?php endwhile; ?> 

<!-- </section> upcomig-expedition -->

    <?php wp_reset_postdata(); ?>
    <?php else : ?>
                            
    <h2>Nothing found!</h2>
                            
    <?php endif; ?>



</section> <!-- section upcomming expedition-->

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

            <div class = "expedition-image">
                     <picture> 
                <?php echo '<img src="'.$mission['image'].'"/>';?>
                    </picture>    
            </div> <!--expedition-image -->  



            <div class = "expedition-name" id = "expedition-name">

                    <!-- <div class = "name-wrapper">  -->

                <div class = "expedition-title">
                    <p> <?php  echo the_title();?> </p>
                    <i class="fas fa-angle-down"></i>
                </div>   <!-- expedition-title -->

                <!-- </div>  -->  <!--  name-wrapper -->


                <div class = "expedition-info">

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

                            
                </div> <!--expedition-info -->

            </div>   <!--expedition-name -->  


        </div> <!--single-expedition -->    

    <?php } ?>
    <?php endwhile; ?> 



    <?php wp_reset_postdata(); ?>
    <?php else : ?>
                            
    <h2>Nothing found!</h2>
                            
    <?php endif; ?>


</section>    

<section class = "sponsors">
                            
    <p>  Our expeditions are proudly supported by socially conscious brands and research organizations around the world. It''s an honour to work with you.</p>

        <div class = "sponsors-logos"> </div>

</section>


<!-- display all the team members (all the teams)-->




<section class = "wsb-team">


    <!-- <div id="carousel-team" class="carousel slide" data-ride="carousel"> -->
        <!-- <div class = "carousel"> -->
            <?php 
            // $c = 0;
            // $class = '';
            ?>

            <?php
                $args = array( 'post_type' => 'team', 'order' => 'ASC', 'posts_per_page' => -1  );
                $teams = new WP_Query( $args ); 
            ?>
                        
            <?php if ( $teams ->have_posts() ) : ?>
            <?php while ( $teams ->have_posts() ) : $teams ->the_post(); ?>
            <?php// $c++ ;  ?>

            <!-- <ul> -->


 <div class = "team-type-carousel"> 
                        
                <p> <?php the_title()?> </p>
                        <?php 
                            
                          //  if ( $c == 1 ) $class .= ' active';
                          //  else $class = " ";
          ?>

            <?php $teamMembers = CFS()->get('members'); 

                foreach ($teamMembers as $member) {?>
                

        <div class = "single-member" id = "image">

            <div class="item <?php// echo $class; ?>" > 

                <div class = "member-name">                  
                    <?php  echo CFS()->get.$member['name']; ?>
                </div>

   
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
            </div> <!--item--> 
        </div> <!--member-thumbnail-->     

                <?php } ?>
          
 </div> <!--teamtype--> 
                

    <?php endwhile; ?> 
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    
        <h2>Nothing found!</h2>
    
    <?php endif; ?>

    
       

</div> <!--car teasm--> 
 
 </div> <!--carousel inerl--> 

</section> <!-- wsb-team--> 

<section class = "research-projects">

    <div class = "research">

        <?php
            $args = array( 'post_type' => 'research', 'order' => 'ASC', 'posts_per_page' => -1  );
            $thinkTank = new WP_Query( $args );
        ?>
	
		<?php if ($thinkTank ->have_posts() ) : ?>
        <?php while ( $thinkTank ->have_posts() ) : $thinkTank ->the_post(); ?>
        

            <div class = "current-research">
                
                <p> <?php the_title()?> </p>

            </div>

            <div class ="single-reserach-container">

                <?php $researches = CFS()->get('research'); 
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


            </div> <!-- single-reserach-container-->
<!-- custom post type for events -->
 
 

        <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
    
            <h2>Nothing found!</h2>
    
        <?php endif; ?>

</section>

</div> <!-- expeditions-container --> 

</div><!-- expedition-content-wrapper-->
                     
</div> <!-- content-area -->

<?php get_footer(); ?>


