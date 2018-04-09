<?php

// wp_die('ça marche');//permet de tester l'appel du php >> affiche le message en étiquette


function wooCom2_nouveau_contenu_avant_produit(){
    echo '<div>mon texte</div>';
    // the_title();
    // the_title('h3', 'h3');
}

// Ajout d'un contenu avant les produits 1. où on s'accroche   2. on préfixe les fonctions  3. la priorité par défaut est 10
add_action('woocommerce_before_shop_loop_item_title', 'wooCom2_nouveau_contenu_avant_produit', 5);

//on change de place ajouter au panier
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 4);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

add_action( 'woocommerce_before_shop_loop_item_title','woocommerce_template_single_price', 1 );
