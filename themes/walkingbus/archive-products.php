<?php

/*
Template Name: products
*/

?>

<?php get_header();  ?>

<div class = "site-content-wrapper">

<section class = "shop-page-header">

    <div class = "shop-info">
       
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content();?>
            
        
        <?php endwhile;?>
        <?php endif; ?>
    </div>
       


    <div class = "shop-banner">

        <!-- loop to display the banner  -->

        <div class= "banner">

            <?php  $images = CFS()->get('shop_banner'); 
                        foreach ($images as $image) {?>
                         
                            <picture> 
                            <?php echo '<img src="'.$image['banner'].'"/>'; ?>
                            </picture>
                        
 <?php }?>

            <h1> <?php the_title(); ?> </h1>

        </div>
    </div>

</section>

<section class = "products-gallery">

    <div class = "products-gallery-container">

    <!-- loop to display all the products, to change the number of products displayed 
        set the post per page number to the desired value -->

		
        <!-- custom field loop to display the products thumbnails as a gallery-->	
        <?php
            $args = array( 'post_type' => 'products', 'order' => 'ASC', 'posts_per_page' => -1 );
            $products = new WP_Query( $args ); 
        ?>

            <?php if ( $products->have_posts() ) : ?>
            <?php while ( $products->have_posts() ) : $products->the_post(); ?>


        <div class = "single-product">

            <div class = "product-image"> 

                <picture>
                    <?php the_post_thumbnail();?>
                </picture>
      
             </div>  <!-- .product-image -->

           
            <div class = "product-info">

             <!-- call custom field suite for product name and price-->

                <p> <a href = "<?php the_permalink();?>"> <?php the_title();?> </p> </a>
                <p> <?php echo CFS()->get( 'price' ); ?>  </p>
          
            </div> <!-- .product-info-->


        </div> <!-- .single-product -->
            


            <?php endwhile; ?>

    </div> <!-- products-gallery-container -->
    </section>
    </div>
    
    
            <?php wp_reset_postdata(); ?> 

            <?php else : ?>

                <h2>Nothing found!</h2>

            <?php endif; ?>
                    
		
<?php get_footer(); ?>