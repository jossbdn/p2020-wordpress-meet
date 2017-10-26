<footer class="page-footer z-depth-0 transparent">
    <div class="container">
        <div class="row">
            <div class="col s12 menuFooter">
                <ul>
                    <?php
                    $args=array(
                        'theme_location' => 'footer', // nom du slug
                        'menu' => 'footer_fr', // nom à donner cette occurence du menu
                        'menu_class' => 'menu_footer', // class à attribuer au menu
                        'menu_id' => 'menu_id' // id à attribuer au menu
                        // voir les autres arguments possibles sur le codex
                    );
                    wp_nav_menu($args);
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Execution de la fonction wp_footer() obligatoire ! -->
<?php wp_footer();  ?>
</body>
</html>