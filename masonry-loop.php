<!-- Container -->
<div class="container blog-masonry-container">

    <!-- Masonry Wrapper-->
    <div id="masonry-wrapper">


    <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                $format = get_post_format();
                if( false === $format  )  $format = 'standard';
                get_template_part( 'postformats/masonry', $format );
            ?>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    </div>
<div class="clearfix"></div>

        <!-- Pagination -->
        <div class="pagination-container">
            <?php if(function_exists('wp_pagenavi')) { ?>
            <nav class="pagination">
                 <?php wp_pagenavi(); ?>
            </nav>
            <?php
            } else {
            if ( get_next_posts_link() ||  get_previous_posts_link() ) : ?>
            <nav class="pagination">
              <ul>
                <?php if ( get_previous_posts_link() ) : ?>
                <li id="next"><?php previous_posts_link(''); ?></li>
                <?php endif; ?>
                <?php if ( get_next_posts_link() ) : ?>
                <li id="prev"><?php next_posts_link(''); ?></li>
                <!-- <li><a href="#" class="next"></a></li> -->
              <?php endif; ?>
            </ul>
          </nav>
           <?php endif;
           } ?>
        </div>
<!-- Container / End -->
