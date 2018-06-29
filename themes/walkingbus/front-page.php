<?php
/**
 * The Main Home Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<main class="page-content">

    <section class="home-description">
        <header>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </header>
    </section>

    <section class="home-about">
        <header>
            <h2>About Us</h2>
            <p>
                Officia deserunt cillum velit nisi non aliquip cillum voluptate elit.
            </p>
        </header>
        <div>
            <h3>Access Education</h3>
            <p>
                Officia deserunt cillum velit nisi non aliquip cillum voluptate elit. Qui officia reprehenderit velit anim nostrud consequat ad ad velit irure irure nostrud nisi. Eiusmod labore exercitation non laboris aute occaecat eiusmod cupidatat veniam ut tempor irure officia nulla. Pariatur deserunt aliqua in laboris ex velit labore laboris amet do deserunt aliquip laboris do.
            </p>
            <h3>Lacked adequation <em>Nutrition</em></h3>
            <p>
                Ea ex fugiat ea fugiat. Ut consequat non aute laborum mollit proident sit adipisicing laborum dolor ut. Do nisi ipsum sit esse.
            </p>
            <h3>Improve the <em>Curriculum</em></h3>
        </div>
        <footer>
            <a class="learn-more-button" href="#">Learn More</a>
        </footer>
    </section>

    <section class="home-video">
        <header class="screen-reader-text">
            <h2>Video</h2>
        </header>
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lQQnaQ9wzl8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </section>

    <section class="home-impact">
        <header>
            <h2>Impact</h2>
        </header>
        <div>
            <p>Anim tempor reprehenderit do elit voluptate veniam. Culpa velit enim sunt sit magna aliquip officia sunt velit amet sit consequat. Quis fugiat exercitation nulla aliqua reprehenderit dolore duis est veniam nostrud. Irure voluptate veniam ea Lorem Lorem Lorem tempor sit incididunt cillum. Cillum mollit sunt amet cillum Lorem do excepteur ipsum irure eu quis Lorem elit.
Deserunt sint sunt commodo amet anim cillum esse adipisicing eiusmod aliqua. Est esse laboris nisi ipsum et eiusmod eiusmod cupidatat laborum. Exercitation consectetur eiusmod enim veniam nulla veniam reprehenderit exercitation.</p>
            <p>Id voluptate nostrud ut esse fugiat et irure sunt cillum ea est elit pariatur labore. Est ut aliquip incididunt magna eiusmod aute incididunt dolore aute occaecat qui enim. Consequat sit est consectetur ut laborum laborum consectetur tempor nostrud deserunt exercitation reprehenderit tempor.
Irure est incididunt commodo officia fugiat reprehenderit minim id enim proident proident dolor voluptate id. Ullamco quis consectetur ullamco adipisicing id esse elit consequat ut laborum aliqua aute. Consequat sunt eu magna ut in nisi nulla quis veniam nulla irure cillum. Officia tempor incididunt eu minim sint ullamco eu esse. Cupidatat ad eiusmod veniam reprehenderit sint ex fugiat ex. Mollit nisi aliquip nisi minim consectetur nulla. Adipisicing dolor id pariatur officia.</p>
        </div>
    </section>

    <section class="home-infographic">
        <header class="screen-reader-text">
            <h2>Infoghaph</h2>
        </header>
        <div>
            <article>
                <header>
                    <h2>Uganda</h2>
                </header>

                <footer>
                    <a class="learn-more-button" href="#">Learn More</a>
                </footer>
            </article>
            <article>
                <header>
                    <h2>India</h2>
                </header>

                <footer>
                    <a class="learn-more-button" href="#">Learn More</a>
                </footer>
            </article>
        </div>
        <footer>

        </footer>
    </section>

    <section class="home-goal">
        <header>
             <h2 class="screen-reader-text">Our Goal</h2>
             <h3>Help us reach our goal<h3>
             <h4>2020</h4>
        </header>
        <div>
            <div id="myProgress">
                <div id="myBar"></div>
            </div>
        </div>
        <footer>
            <a href="#">Get Involved</a>
        </footer>
    </section>

</main>

<?php get_footer(); ?>
