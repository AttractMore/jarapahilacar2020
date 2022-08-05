<?php
/**************************************************************
  Stop certain product categories from being displayed. See https://wpdatatables.com/woocommerce-hide-category-from-your-shop-page/
**************************************************************/
add_filter( 'get_terms', 'am_get_subcategory_terms', 10, 3 );

function am_get_subcategory_terms( $terms, $taxonomies, $args ) {
  $new_terms = array();
  // if it is a product category and on the shop page
  if ( in_array( 'product_cat', $taxonomies ) && ! is_admin() && is_shop() ) {
    foreach( $terms as $key => $term ) {
      if ( !in_array( $term->slug, array( 'jarapas-alpujarrenas', 'festival-de-ecoturismo' ) ) ) { //pass the slug names here
        $new_terms[] = $term;
      }
    }
    $terms = $new_terms;
  }
  return $terms;
}
