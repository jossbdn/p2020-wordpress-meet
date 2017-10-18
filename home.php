<?php get_header(); ?>
<main>
    <div class="parallax-container row">
        <div class="container">
            <h1>Trouves ton escalope bien saignante <br> pas de foutaises !</h1>
        </div>
        <a class="waves-effect waves-light btn"><i class="material-icons">wc</i> Trouver l'âme soeur</a>
        <!--<div class="parallax">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/background.jpg">
        </div>-->
    </div>
    <div class="col s12">
        <div class="container">
            <h2>Hommes & Femmes</h2>
        </div>
        <div class="divider"></div>
        <div class="container row">
            <?php

            $args = array(
                'post_type' => 'profile',
                'orderby' => 'date',
                'order'   => 'DESC'
            );

            $the_query = new WP_Query( $args );
            // The Loop
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class="col m3">
                        <a href="<?php echo the_permalink(); ?>">
                        <div class="card z-depth-0 waves-effect">
                            <div class="card-image z-depth-2">
                                <div class="overlay"></div>
                                <?php the_post_thumbnail( 'hub_article_thumbnail' ); ?>
                                <span class="card-title"><?php the_title(); ?></span>
                                <?php   // Get terms for post
                                $terms = get_the_terms( get_the_id(), 'sexe' );
                                // Loop over each item since it's an array
                                if ( $terms != null ){
                                    foreach( $terms as $term ) { ?>

                                        <div class="chip">
                                            <?php echo $term->name; ?>
                                        </div>

                                <?php } } ?>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php
                }
            }else {
                ?>
                Nous n'avons pas trouvé d'article répondant à votre recherche
                <?php
            }
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
