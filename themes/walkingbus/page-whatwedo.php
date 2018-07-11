<?php
/**
 * Template name: What we do
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="access">
                <h1>Access</h1>
                <p>Our School Bus Model focuses on two main areas:</p>
                <p><span>1</span> Getting students to and from school.</p>
                <p><span>2</span> Financing the Bus.</p>
            </section>
            <div class='video'><?php echo CFS()->get('video'); ?></div>
            <div class="donate-btn-wwd"><a href="">Donate</a></div>
            <section class="access-how">
                <h1>How it works</h1>
                <ul>
                    <li><span>1</span>Transports students to and from school.</li>
                    <li><span>2</span>Bus works as a taxi while school is in session and generates $28 USD/day on average.</li>
                    <li><span>3</span>Fuel and drivers are paid.</li>
                    <li><span>4</span>$10-$12 USD are saved each day to put in a fund for maintenance and repair.</li>
                </ul>
            </section>
            <div class="white"><a class="access-btn" href="">Learn more</a></div>

            <section class="nutrition">
                <h1>Nutrition</h1>
                <p class="p">The three pillars of our nutrition program includes:</p>
                <div class="nutrition-pillars-container">
                    <p class="p"><span>1</span> Water Catchment Systems.</p>
                    <p class="p"><span>2</span> Chicken Coops.</p>
                    <p class="p"><span>3</span> Community supported agricultural (CSA) gardens</p>
                </div>
                <div class="nutrition-descrip">
                    <p>
                    This approach uses pre-exisiting infrastructure to catch and store water.
                    The water is also usedby the students, for the chicken coops and helps water the plants in our CSA gardens.
                    </p>
                </div>
                <div class="nutrition-pillar">
                    <h1>Water Catchment Systems</h1>
                    <i class="fas fa-angle-down angle1"></i>
                </div>
                <div class="nutrition-desc-container container1">
                    <img src=<?php echo CFS()->get('wcs_image'); ?> />
                    <p class="nutrition-description">
                        <?php echo CFS()->get('wcs_description'); ?>
                    </p>
                    <div class="access-bttn"><a class="access-btn" href="">Learn more</a></div>
                </div>
                <div class="nutrition-pillar">
                    <h1>Chicken Coops</h1>
                    <i class="fas fa-angle-down angle2"></i>
                </div>
                <div class="nutrition-desc-container container2">
                    <img src=<?php echo CFS()->get('cc_image'); ?> />
                    <p class="nutrition-description">
                        <?php echo CFS()->get('cc_description'); ?>
                    </p>
    
                    <div class="access-bttn"><a class="access-btn" href="">Learn more</a></div>               
                </div>
                <div class="nutrition-pillar">
                    <h1>CSA Gardens</h1>
                    <i class="fas fa-angle-down angle3"></i>
                </div>  
                <div class="nutrition-desc-container container3">
                    <img src=<?php echo CFS()->get('csa_image'); ?> />
                    <p class="nutrition-description">
                        <?php echo CFS()->get('csa_description'); ?>
                    </p>
                    <div class="access-bttn"><a class="access-btn" href="">Learn more</a></div>
                </div>
            </section>

            <section class="curriculum">
                <h1>Curriculum</h1>
                <p class="pp">We incorporate the curriculum using the <span>SiMBi</span> app, an online reading resource.</p>
                <img class="curri-img" src=<?php echo CFS()->get('curri_img'); ?> />    
            <section class="curriculum-how">
                <h1>How it works</h1>
                <ul>
                    <li><span class="how-num">1</span>Students read books out loud and record them as audio files.</li>
                    <li><span class="how-num">2</span>Audio files and digital text  are shared with participating schools.</li>
                    <li><span class="how-num">3</span>Students are able to access shared audio files.</li>
                    <li><span class="how-num">4</span><span>SiMBi</span> is used in Kindergarten to High school levels.</li> 
                    <li><span class="how-num">5</span>Uses combination of phonics, sight words, and fluency drills.</li> 
                </ul>
            </section>
            <div class="access-bttn join-simbi"><a class="access-btn" href="">Join SiMBi</a></div>
            <div class="curriculum-pillar">
                <h1>Simbi reading room</h1>
                <i class="fas fa-angle-down angle4"></i>
            </div>  
            <div class="nutrition-desc-container container4">
                <img src=<?php echo CFS()->get('simbi_rr'); ?> />
                <p class="curriculum-description">
                    <?php echo CFS()->get('simbi_rr_description'); ?>
                </p>
                <div class="access-bttn"><a class="access-btn" href="">Learn more</a></div>
            </div>
            <div class="curriculum-pillar">
                <h1>Simbi classroom</h1>
                <i class="fas fa-angle-down angle5"></i>
            </div>  
            <div class="nutrition-desc-container container5">
                <img src=<?php echo CFS()->get('simbi_cr'); ?> />
                <p class="curriculum-description">
                    <?php echo CFS()->get('simbi_cr_description'); ?>
                </p>
                <div class="access-bttn"><a class="access-btn" href="">Learn more</a></div>
            </div>
            </div> 
            </section>  
            <p class="quote">
                "This program provides incentive for students to connect with their readings 
                in a positive way and also enhances their literacy skills."
                <span>- Anderson Cooper, CNN</span>
            </p>
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>