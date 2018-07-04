<?php
/**
 * Template part for displaying single products.
 *
 * @package inhabitent
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	<header class="entry-header">
		<?php 
	if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<h1> <?php the_post(); ?> </h1>
			<h1> <?php the_title(); ?> </h1>
		<?php
		 endif; ?>

	

		<div class="entry-meta">

		<!-- commented below are finfo about author and publication dates  -->
			<?php 
			//red_starter_posted_on(); ?> 
			<!-- /  -->
			<?php 
			//red_starter_comment_count(); ?> 
			 <!-- /  -->
			<?php //red_starter_posted_by(); ?> 
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	
	</footer><!-- .entry-footer -->


</article><!-- #post-## -->




<!-- <?php 
// the_title( '<h1 class="entry-title">', '</h1>' ); 
// commented because I'm using it in a div class for product page
?> -->