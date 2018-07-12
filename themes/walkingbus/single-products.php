<?php
/**
 * 
 * Template name: product single page 
 * The template for displaying all single products posts.
 *
 * 
 */

get_header(); 
?>

	<div id="primary" class="content-area">
 
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			

			<?php //get_template_part( 'template-parts/content', 'singleproducts' ); ?>
		
			<div class = "product-info">

			   <?php  $images = CFS()->get('products');?>

			   <div class = "main-image">

					<picture>
						<?php echo the_post_thumbnail(); ?>
					</picture>
					
				</div>
				
				 <?php  foreach ($images as $image) {?>
	
					<picture>
					<?php echo '<img src="'.$image["image"].'"/>';?>
					<?php echo '<img src="'.$image["image_2"].'"/>';?>
					<?php echo '<img src="'.$image["image_3"].'"/>';?>
					<?php echo '<img src="'.$image["image_4"].'"/>';?>

					</picture>

				<div class = "product-details"> 

					<?php	
						$price = CFS()->get( 'price' );
						$description =CFS()->get( 'description' );
					?>
					 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php echo "<p class=\"price\"> \${$price}</p>";?>
					<?php echo "<p class=\"product-exerpt\">{$description}</p>";}?>

				</div>

			</div> <!-- product-info -->

 
		
           
            
		    
			<?php endwhile; // End of the loop. ?>
            

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>





