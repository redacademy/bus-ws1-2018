<?php

/*
Template Name: products
*/

/**
 * The template for displaying products page
 *
 * @package inhabitent
 */

 
?>

<?php get_header();  ?>

    <div class = "shop-menu">

        <h1> <?php the_title(); ?> </h1>

    
        <nav class = "categories-menu"> 

            <!-- loop to display the links to the shopping categories  -->

            <?php 
                // $terms = get_terms('Products');
                // echo '<ul class = "product-type">';
                // foreach ($terms as $term){
                //     echo '<li class="type"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>' ;
                // }  
                // echo '</ul>';
            ?>

        </nav> <!-- .categories-menu-->            

    </div> <!-- .shop-menu -->



    <div class = "products-gallery">

        <!-- loop to display all the products -->
			
        <?php
            $args = array( 'post_type' => 'products', 'order' => 'ASC', 'posts_per_page' => -1  );
            $products = new WP_Query( $args ); // instantiate our object
        ?>

            <?php if ( $products->have_posts() ) : ?>
            <?php while ( $products->have_posts() ) : $products->the_post(); ?>


      

        <div class = "single-product">

            <div class = "product-image"> 

                <?php  $images = CFS()->get('products');
				   foreach ($images as $image) {
                    echo '<img src="'.$image["image"].'"/>';
                }?>

            </div> <!-- .product-image -->

            <div class = "product-info">

                <p> <?php the_title();?> </p>
                <p> <?php echo CFS()->get( 'price' ); ?>  </p>

            </div> <!-- .product-info-->


        </div> <!-- .single-product -->
            


            <?php endwhile; ?>

    </div> <!-- products-gallery -->
    
    
            <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <h2>Nothing found!</h2>

            <?php endif; ?>
                    
		
<?php get_footer(); ?>