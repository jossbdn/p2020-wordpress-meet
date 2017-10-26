<?php
/*
    Template Name: Page contact
 */
    get_header();

?>

<main class="container row">
    <?php if (have_posts()): while( have_posts() ) : the_post(); ?>

        <div class="col s12">
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
