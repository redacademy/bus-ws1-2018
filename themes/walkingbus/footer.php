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
							<picture class="bkg-featuredon"></picture>
							<div class="link2">
								<a class="link1"></a>
								<a class="link1"></a>
								<a class="link1"></a>
								<a class="link1"></a>
								<a class="link1"></a>
							</div>
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
						<p>subscribe <span>to our</span> newsletter</p>
						<form action="submit.php" method="post" class="subscription-form" id="subscription-form">
							<input id="email-input" name="username" type="email" maxlength="36" placeholder="Email Adress"></input>
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
							<p id="footer-info">
							<?php
							if(is_active_sidebar('footer-info')){
								dynamic_sidebar('footer-info');
							}
							?>
							</p>
						</div>
						<div class="registration">
							<p class="registration-footer">Charitable Registration # 81033 8723 RR0001</p>
							<p class="registration-footer">2018 The Walking School Bus, All rights reserved</p>
						</div>
					</div>

				</section>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
