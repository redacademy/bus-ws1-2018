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

			   <div class = "product-images"> 

			   <div class = "main-image">

					<picture>
						<?php echo the_post_thumbnail(); ?>
					</picture>
					
				</div> <!-- main-image -->
				
				 <?php  foreach ($images as $image) {?>
				
				<div class = "thumbnails-wrapper">
	
					<!-- <picture> -->
					<div class = "img-min"> <?php echo '<img src="'.$image["image"].'"/>';?> </div>
					<div class = "img-min"> <?php echo '<img src="'.$image["image_2"].'"/>';?></div>
					<div class = "img-min"> <?php echo '<img src="'.$image["image_3"].'"/>';?></div>
					<div class = "img-min"> <?php echo '<img src="'.$image["image_4"].'"/>';?></div>
				 </div>
					<!-- </picture> -->

					</div> <!-- product-images-->

				</div> <!-- product-info -->	

				<div class = "product-details"> 

					<?php	
						$price = CFS()->get( 'price' );
						$description =CFS()->get( 'description' );
					?>
					 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php echo "<p class=\"price\"> \${$price}</p>";?>
					<?php echo "<p class=\"product-exerpt\">{$description}</p>";}?>

				</div>

			

 
		
           
            
		    
			<?php endwhile; // End of the loop. ?>
            

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>





