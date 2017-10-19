jQuery(document).ready(function($){
    $('.parallax').parallax();

    $('#randBtn').hover(function(){
        Materialize.toast('Trouvez un profil aléatoire pour trouver l\'âme soeur', 4000);
    });
});