<?php get_header(); ?>

    <main class="container row">

        <?php
        if ( have_posts() ) :

            /* Start the Loop */
            while ( have_posts() ) : the_post();

                ?>

                <div class="row">
                    <div class="col s12">
                        <h2><?php the_title(); ?></h2>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <div class="card z-depth-0 waves-effect">
                            <div class="card-image z-depth-2">
                                <div class="overlay"></div>
                                <?php the_post_thumbnail( 'hub_article_thumbnail' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col s8">
                        <h1 style="font-weight: bold;"><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                        <p><?php
                                $terms = get_the_terms( get_the_id(), 'sexe' );
                                if ( $terms != null ):
                                foreach( $terms as $term ):
                                $term_link = get_term_link( $term );
                            ?>
                        <a href="<?php echo $term_link; ?>">
                            <div class="chip">
                                <?php echo $term->name; ?>
                            </div>
                        </a>

                        <?php endforeach; endif; ?></p>
                    </div>
                </div>

                <?php


            endwhile;

        else :

            get_template_part( 'template-parts/post/content', 'none' );

        endif;
        ?>

    </main>

<?php get_footer();
