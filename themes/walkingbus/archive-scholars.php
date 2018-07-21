

<?php

/*
Template Name: scholarships
*/


/**
 * The template for displaying scholarships page
 *
 * 
 */

 
?>

<?php get_header();  ?>

<div class = "site-content-wrapper">

<section class = "scholarship-page-header">

    <div class = "scholarship-info">
       
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content();?>
            
        
        <?php endwhile;?>
        <?php endif; ?>
    </div>
       


    <div class = "scholarships-banner">

        <!-- loop to display the banner  -->

        <div class= "banner">

            <?php // $images = CFS()->get('scholarship_banner'); 
                      //  foreach ($images as $image) {?>
                         
                            <picture> 
                            <?php //echo '<img src="'.$image['banner'].'"/>'; ?>
                            </picture>
                        
 <?php// }?>

            <h1> <?php the_title(); ?> </h1>

        </div>
    </div>

</section>

<section class = "scholars-gallery">

    <div class = "scholars-gallery-container">

    <!-- loop to display all the scholars, to change the number of scholars displayed 
        set the post per page number to the desired value -->

		
        <!-- custom field loop to display the scholars thumbnails as a gallery-->	
        <?php
            $args = array( 'post_type' => 'scholars', 'order' => 'ASC', 'posts_per_page' => -1 );
            $students = new WP_Query( $args ); 
        ?>

            <?php if ( $students ->have_posts() ) : ?>
            <?php while ( $students ->have_posts() ) : $students ->the_post(); ?>


        <div class = "single-scholar">

            <div class = "scholar-image"> 

                <picture>
                    <?php the_post_thumbnail();?>
                </picture>
      
             </div>  <!-- .product-image -->

           
            <div class = "scholar-info">
            <?php  $scholars = CFS()->get('scholars_informations');?>
                     
                      <?php foreach ($scholars as $scholar){?>
                      
                        <picture> <?php	echo '<img src="'.$scholar['picture'].'"/>'; ?> </picture>
                       <p> <?php echo $scholar['name'] ?></p> 
                       <p> <?php echo $scholar['bio'] ?></p> 
                      <?php } ?>

             <!-- call custom field suite for product name and price-->

                <p> <a href = "<?php the_permalink();?>"> <?php the_title();?> </p> </a>
                <p> <?php //echo CFS()->get( 'price' ); ?>  </p>
          
            </div> <!-- .product-info-->


        </div> <!-- .single-product -->
            


            <?php endwhile; ?>

    </div> <!-- scholars-gallery-container -->
    </section>
    </div>
    
    
            <?php wp_reset_postdata(); ?> 

            <?php else : ?>

                <h2>Nothing found!</h2>

            <?php endif; ?>
                    
		
<?php get_footer(); ?>


<?php get_footer(); ?>

