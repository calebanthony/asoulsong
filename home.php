<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <?php /*
        <div id="featured-area">
            <?php
                query_posts([
                    'category_name' => 'Featured',
                    'posts_per_page' => 1
                ]);
            ?>

            <?php if (have_posts()) : ?>

            <!-- the loop -->
            <?php while (have_posts()) : the_post(); ?>
            <?php echo '<a href="';
                    echo the_permalink();
                echo '">';
                    echo '<h1 class="display-1 featured-area__text">' . get_the_title() . '</h1>';
                    echo '<div class="featured-area__image">';
                        echo the_post_thumbnail('full');
                        // echo '<img src="' . get_template_directory_uri() . '/library/images/IMG_9936.png">';
                    echo '</div>';
                echo '</a>';
            endwhile;
            endif;
            ?>
        </div>
        */ ?>

        <main
            id="homePage"
            class="m-all t-3of3 d-7of7 cf"
            role="main"
            itemscope
            itemprop="mainContentOfPage"
            itemtype="http://schema.org/Blog"
        >
            <div class="logo-area">
                <img src="<?php echo get_template_directory_uri(); ?>/library/images/welcome.png" />
            </div>

            <div class="who-we-are">
                <p>Promoting godly womanhood through honest stories and inspired jewelry.</p>
                <p>We believe that we live in a world full of distractions and false identities, but there exists an eternal hope.</p>
                <p>In everything we do, we strive to create a "come as you are" community of women so that collectively, we may overcome false fulfillment and instead rejoice in the One who is true.</p>
            </div>

            <div class="interact">
                <a href="/shop">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/store.png" />
                </a>
                <a href="/about">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/connect.png" />
                </a>
                <a href="/blog">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/blog.png" />
                </a>
            </div>

            <div class="community">
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup"><form id="mc-embedded-subscribe-form" class="validate" action="//asoulsong.us13.list-manage.com/subscribe/post?u=1be7264d21ef4b4f9e3fa5b28&amp;id=efa2e2cae6" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
                <div id="mc_embed_signup_scroll">
                <h2>Join The Community</h2>
                <p>Follow to receive encouragement, inspiration and special offers straight to your inbox!</p>
                <div class="mc-field-group"><input id="mce-NAME" class="required" name="NAME" type="text" value="" placeholder="Name" /></div>
                <div class="mc-field-group"><input id="mce-EMAIL" class="required email" name="EMAIL" type="email" value="" placeholder="Email Address" /></div>
                <div id="mce-responses" class="clear"></div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input tabindex="-1" name="b_1be7264d21ef4b4f9e3fa5b28_efa2e2cae6" type="text" value="" /></div>
                <div class="clear"><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Sign Me Up!" /></div>
                </div>
                </form></div>
                <!--End mc_embed_signup-->

                <h2>Follow Us</h2>
                <a href="https://www.facebook.com/asoulsong.ka">
                    <span class="fa fa-facebook-f fa-3x"></span>
                </a>
                <a href="https://www.instagram.com/asoulsong/">
                    <span class="fa fa-instagram fa-3x"></span>
                </a>
            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
