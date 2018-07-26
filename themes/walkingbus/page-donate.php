<?php

/*
Template Name: donate
*/

?>
<?php get_header(); ?>

	<div id="primary" class="content-area-donate">
		<main id="main" class="site-main-donate" role="main">
            <div class="donation-image image-page-donate" style="background-image: url(<?php echo CFS()->get('donation_image'); ?>)">    
                <a href="" class="donate-btn">donation</a>
            </div>
            <div class="sponsor-image image-page-donate" style="background-image: url(<?php echo CFS()->get('sponsor_image'); ?>)">
                <a class="donate-btn" href="http://bus.van.cp.academy.red/scholarships/">sponsor scholar</a>
            </div>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
