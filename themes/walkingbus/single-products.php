<?php
/**
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
	
				<?php 
					$price = CFS()->get( 'price' );
					$exerpt =CFS()->get( 'exerpt' );
				?>

				<?php echo "<p class=\"price\"> \${$price}</p>";?>
				<?php echo "<p class=\"product-exerpt\">{$exerpt}</p>";?>



			</div> <!-- product-info -->

 
		

			<!-- <?php
				// If comments are open or we have at least one comment, load up the comment template.
			// if ( $products->have_posts() ) : ?>
            <?php //while ( $products->have_posts() ) : $products->the_post(); ?> -->
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            
            <?php  $images = CFS()->get('products');
				   foreach ($images as $image) {
                    echo '<img src="'.$image["image"].'"/>';
                }?>
<?php// endif; ?>   
			<?php endwhile; // End of the loop. ?>
            

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>





