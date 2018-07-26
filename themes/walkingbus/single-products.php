<?php
/**
 * 
 * Template name: product single page 
 * 
 */

get_header(); 
?>

<div id="primary" class="content-area">
 
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class = "product-info">

			   <?php  $products = CFS()->get('products');?>

			   <div class = "images-details-wrapper">

				<div class = "product-images"> 

					<div class = "main-image">

						<picture>
							<?php echo the_post_thumbnail(); ?>
						</picture>
						
					</div> <!-- main-image -->
					
					<?php  foreach ($products as $product) {?>

						<?php 
						$smallImage1 = $product["image"];
						$smallImage2 = $product["image_2"];
						$smallImage3 = $product["image_3"];
						$smallImage4 = $product["image_4"]; 
						$description = $product["description"];
						$price = $product["price"];
						
					?>

					<?php $defaultImage = "/walkingbus/wp-content/themes/walkingbus/assets/images/placeholder.png" ?>

					<div class = "thumbnails-wrapper">
					
						<div class = "img-min"> 

							<?php if (!empty ($smallImage1) ) { ?>
								<picture> <?php	echo '<img src="'.$smallImage1.'"/>'; ?> </picture>
							<?php } else { echo '<img src="'.$defaultImage.'"/>'; } ?>
 
						</div>

						<div class = "img-min"> 
						
							<?php if(!empty ($smallImage2)) {?>	
								<picture> <?php echo '<img src="'.$smallImage2.'"/>';?> </picture>
							<?php } else { echo '<img src="'.$defaultImage.'"/>'; } ?>

						</div>

						
						<div class = "img-min"> 

							<?php if(!empty ($smallImage3)) {?>
							 <?php echo '<img src="'.$smallImage3.'"/>';?> 
							 <?php } else {echo '<img src="'.$defaultImage.'"/>'; } ?>

						</div>			

						<div class = "img-min"> 

							<?php if(!empty ($smallImage4)) {?>
							 <?php echo '<img src="'.$smallImage4.'"/>';?> 
							 <?php } else {echo '<img src="'.$defaultImage.'"/>'; } ?>

						</div>

				 
					</div> <!-- thumbnails-wrapper-->

				</div> <!-- product-images -->	

				<div class = "product-details"> 

					<div class = "name-price-wrapper">			
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php echo "<p class=\"price\"> \${$price} CAD</p>";?>
					</div>

					<div class = "additional-info">
						<?php echo the_content();?>  
					</div><!-- additional info-->

					<div class = "select-buttons">

						<select> Color </select>
						<select> Quantity </select>
						
					</div><!-- select-buttons-->	
						
					
				</div> <!-- product-details -->

				</div><!-- images-details-wrapper-->
                
				<div class = "product-description">

					<p> Description </p>

					<?php echo "<p class=\"product-exerpt\">{$description}</p>";?>
				</div> <!-- product-description -->
				
							<?php } ?>

<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->

</div><!-- #primary -->
						
	
	

<?php get_footer(); ?>





