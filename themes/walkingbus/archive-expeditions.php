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
            <div class = "mission-statement">  
                <?php the_title();?> 
                <p>  <?php echo CFS()->get.$image['mission_statement'];?></p>
    
            </div> 

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

    <h1> Past Expeditions </h1>

           

    <?php
  //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array( 'post_type' => 'expedition', 'order' => 'ASC', 'posts_per_page' => 1,    'paged' => $paged  );
		$expeditions = new WP_Query( $args ); 
	?>
	
	<?php  if ( $expeditions ->have_posts() ) : ?> 
    <?php  while ( $expeditions ->have_posts() ) : $expeditions ->the_post(); ?>
        
    <?php  $missions = CFS()->get('past_expeditions'); 
    foreach ($missions as $mission) {?>
            
        <div class = "single-expedition">

            <!-- <div class = "expedition-image"> -->
                     <!-- <picture>  -->

                     <?php //the_post_thumbnail();?>
                <?php // echo '<img src="'.$mission['image'].'"/>'; 
                ?>
                    <!-- </picture>     -->
            <!-- </div> expedition-image   -->



             <!-- <div class = "expedition-name" id = "expedition-name"> -->

                    <!-- <div class = "name-wrapper">  -->

                <!-- <div class = "expedition-title"> -->
                    <p><h3><?php  //echo the_title();?><h3> </p>
                    <!-- <i class="fas fa-angle-down"></i> -->
                <!-- </div>   expedition-title -->

                <!-- </div>  -->  <!--  name-wrapper -->

            <!-- </div>   expedition-name  -->

                <div class = "expedition-info">

                    <!-- <div class = "expedition-description" id= "expedition-description"> -->
                                    
                        <div class= "expedition-content"> 

                           
                                <p>  <?php //the_content(); ?> </p>
                          

                            <!-- <span class = "button-wrapper">  -->
                                <a href = "<?php //the_permalink();?>"> <button> read more</button></a>
                            <!-- </span> -->

                        </div>  <!--expedition-content-->  

                    <!-- </div> expedition-description -->

                            
                </div> <!--expedition-info -->
 


        </div> <!--single-expedition -->    

    <?php } ?>
 
    <?php endwhile; ?>  


<?php // if($expeditions->post_count < 1){?>
    <!-- <div class="load-more"><a class="btn secondary-button">no more projects</a></div>
<?php // }else{?>
<div id="expedition-loader" class="loading-banner"><button class = "load-more" > load more </button></div> -->
<?php// }?>

    <?php wp_reset_postdata(); ?>
    <?php else : ?>
  
                            
    <?php endif; ?>
    <!--  -->
    <?php the_content();?>  

</section>    

<section class = "sponsors">
                            
    <p>  Our expeditions are proudly supported by socially conscious brands and research organizations around the world. It''s an honour to work with you.</p>

        <div class = "sponsors-logos"> </div>

</section>


<!-- display all the team members (all the teams)-->




<section class = "wsb-team">


            <?php
                $args = array( 'post_type' => 'team', 'order' => 'ASC', 'posts_per_page' => -1  );
                $teams = new WP_Query( $args ); 
            ?>
                        
            <?php if ( $teams ->have_posts() ) : ?>
            <?php while ( $teams ->have_posts() ) : $teams ->the_post(); ?>
            <?php// $c++ ;  ?>

            <!-- <ul> -->

  <p> <?php the_title()?> </p>
 <div class = "team-type-carousel"> 
        
                            
                          
            <?php $teamMembers = CFS()->get('members'); 

                foreach ($teamMembers as $member) {?>
                

        <div class = "single-member" id = "image">

            <!-- <div class="item <?php// echo $class; ?>" >  -->

                <div class = "member-name">                  
                    <?php  echo CFS()->get.$member['name']; ?>
                </div>

   
                <div class = "member-picture">
                    <?php echo '<img src="'.$member['image'].'"/>';?>
               

                    <div class = "member-info" id = "info">

                        <div class = "icon-wrapper"> 
                            <i class="fas fa-times"></i>
                        </div>

                        <p> <?php  echo CFS()->get.$member['name']; ?> </p> 
                        <p> <?php echo CFS()->get.$member['role'];?></p> 
                        <p>  <?php echo CFS()->get.$member['bio'];?></p> 
                    </div>    <!--member-info-->   

                 </div> <!-- member-picture-->
            <!-- </div> item  -->
        </div> <!--member-thumbnail-->     

                <?php } ?>
          
 </div> <!--teamtype--> 
                

    <?php endwhile; ?> 
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    
        <h2>Nothing found!</h2>
    
    <?php endif; ?>

    
       



</section> <!-- wsb-team--> 

<section class = "research-projects">

    <div class = "research">

       

        <?php
           // $args = array( 'post_type' => 'research', 'order' => 'ASC', 'posts_per_page' => -1  );
          // $thinkTank = new WP_Query( $args );
        ?>
	
		<?php // if ($thinkTank ->have_posts() ) : ?>
        <?php // while ( $thinkTank ->have_posts() ) : $thinkTank ->the_post(); ?>

         <p> <?php// the_title();?> </p>
                <p> <?php// the_content();?> </p>
                <?php //endwhile; ?> 
    <?php // wp_reset_postdata(); ?>

                   <?php// endif; ?>
                
        
        <?php while ( have_posts() ) : the_post(); ?>

     
            <div class = "current-research">

            <h1> Current research </h1>
                
               

            </div>

            <div class ="single-reserach-container">

                <?php $researches = CFS()->get('research'); 
                foreach ($researches as $research) {?>

                    <div class = "single-research">
 
                        <div class = "research-picture">
                            <picture>
                                <?php //echo '<img src="'.$research['image'].'"/>';?>
                            </picture>    
                        </div>

                        <div class = "research-description">
                            <?php //  echo CFS()->get.$research['description']; ?>
                        </div>     

                        <div class = "research-subject">
                            <?php //echo CFS()->get.$research['subject'];?>
                            <?php echo CFS()->get.$research['load_more'];?> 
                        </div> 


                    </div>

                <?php } ?>


            </div> <!-- single-reserach-container-->
<!-- custom post type for events -->
 
 

        <?php endwhile; ?> 
        <?php wp_reset_postdata(); ?>
        <?php //else : ?>
    
            <!-- <h2>Nothing found!</h2> -->
    
     

</section>



<section class = "events">

    <h1> Events </h1>

<div class = "events-wrapper">

    <?php
        $args = array( 'post_type' => 'events', 'order' => 'ASC', 'posts_per_page' => -1  );
       $events = new WP_Query( $args );

    ?>

    <?php if ($events ->have_posts() ) : ?>
    <?php  while ( $events->have_posts() ) : $events->the_post(); ?>


        <div class = "single-events">
           
        <?php the_post_thumbnail();?>
             <a href = "<?php the_permalink();?>">  <p> <?php the_title();?> </p>     </a>
            </div>
            <?php endwhile; ?> 
            <?php wp_reset_postdata(); ?>

               <?php endif; ?>
            
    
   


        </div> <!-- events-wrapper-->
<!-- custom post type for events -->



    <?php// endwhile; ?> 
    <?php// wp_reset_postdata(); ?>
    <?php //else : ?>

        <!-- <h2>Nothing found!</h2> -->

 

</section>


</div> <!-- sections-container --> 

</div><!-- expedition-content-wrapper-->
                     
</div> <!-- content-area -->
</div> <!--car teasm--> 
 
 </div> <!--carousel inerl--> 

<?php get_footer(); ?>


