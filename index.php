<?php get_header(); //appel du template header.php
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


    <main class="container row" id="content">
        <div class="col s12">
            <div class="container">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="divider"></div>
                    <h1><?php the_title(); ?></h1>
                    <h2>Posté le <?php the_time('F jS, Y') ?></h2>
                    <p><?php the_content(); ?></p>
            <?php
                }
            }else {
                ?>
                Nous n'avons pas trouvé d'article répondant à votre recherche
                <?php
            }
            ?>
        </div>
    </main> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>