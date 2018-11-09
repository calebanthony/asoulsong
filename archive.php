<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf post-excerpt' ); ?> role="article">

                <?php
                    echo '<a href="' . get_the_permalink() . '" rel="bookmark" class="post-image">';
                    echo get_the_post_thumbnail($post_id, 'full') . '</a>';
                    echo '<div><a href="' . get_the_permalink() . '" rel="bookmark">';
                    echo '<h1 class="post-title">' . get_the_title()  .'</h1></a>';
                    echo '<p class="post-date">' . get_the_date()  .'</p>';
                    echo '<p class="post-excerpt-text">' . get_the_excerpt() . "<?p></div>";
                ?>

            </article>

            <?php endwhile; ?>

                    <?php echo '<div class="clear"></div>' ?>
                    <?php bones_page_navi(); ?>

            <?php else : ?>

                    <article id="post-not-found" class="hentry cf">
                        <header class="article-header">
                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                        </header>
                        <section class="entry-content">
                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                        </section>
                        <footer class="article-footer">
                                <p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
                        </footer>
                    </article>

            <?php endif; ?>

        </main>

    </div>

</div>

<?php get_footer(); ?>
