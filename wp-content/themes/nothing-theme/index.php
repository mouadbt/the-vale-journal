<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>

            </article>
        <?php endwhile; ?>

        <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '&laquo; Previous', 'nothing-theme' ),
            'next_text' => __( 'Next &raquo;', 'nothing-theme' ),
        ) );
        ?>

    <?php else: ?>
        <p><?php _e( 'No content found.', 'nothing-theme' ); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>