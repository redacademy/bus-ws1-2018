<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html id="error404-html" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<div id="content" class="site-content">

				<main id="main" class="site-main page-content" role="main">
					<header class="page-header screen-reader-text">
						<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
					</header><!-- .page-header -->

					<section class="error-404 not-found">
						<div class="nf-text">
							<p>Looks like you missed the bus.</p>
							<p><a href="javascript:history.back()">Go Back</a> and try an alternate rote.</p>
						</div>

						<!-- <div class="nf-sign-and-bus"></div> -->
					</section><!-- .error-404 -->

				</main><!-- #main -->


			</div><!-- #content -->
				
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
