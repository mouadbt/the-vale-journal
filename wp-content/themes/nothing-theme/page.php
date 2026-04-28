<?php get_header(); ?>

<main id="primary">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><?php the_title(); ?></h1> <?php the_content(); ?>
            </article>
    <?php endwhile;
    endif; ?>
</main>

<?php get_footer(); ?>