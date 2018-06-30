<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
	</div><!-- #content -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
			<section class="main-container-footer">
				<div class="footer-links">
					<div class="featuredon-links"><p>featured-on</p>
						<span class="bkg-featuredon"></span>
					</div>
					<div class="followuson-links"><p>follow us on</p>
						<ul>
							<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>	
							<li><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="subscription-container">
					<p>subscribe <span>to our </span>newsletter</p>
					<form action="submit.php" method="post" class="subscription-form" id="subscription-form">
						<input id="email-input" name="username" maxlength="36" placeholder="Email Adress"></input>
						<button type="submit">Sign Up</button>
					</form>
					<div class="followuson-links-mob">
					<ul>
						<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
						<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>	
						<li><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
					</div>
						<p id="contactus">contact us</p>
					</div>
					<div class="contact-info">
					<div class="contact">
						<p><?php echo CFS()->get( 'address' ); ?></p>
						<p><?php echo CFS()->get( 'email' ); ?></p>
						<p><?php echo CFS()->get( 'footer' ); ?></p>
					</div>
					<div class="registration"><p class="registration-footer">Charitable Registration # 81033 8723 RR0001</p>
					<p class="registration-footer">2018 The Walking School Bus, All rights reserved</p></div>
					</div>
				</section>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
		<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/build/js/general.min.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
