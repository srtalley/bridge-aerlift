<?php 

namespace PSP\Theme;

class Aerlift_WooCommerce {

  
    public function __construct() {

        add_action( 'pre_get_posts', array($this, 'remove_products_from_shop_page') );
    
        
    } // end function construct

    /*
    * Remove the product loop on our custom shop page
    */    
    public function remove_products_from_shop_page( $query ) {
        if ( ! $query->is_main_query() ) return;
        if ( ! $query->is_post_type_archive() ) return;
        if ( ! is_admin() && is_shop() ) {
            $query->set( 'post__in', array(0) );
        }
        remove_action( 'pre_get_posts', array($this, 'remove_products_from_shop_page') );
        remove_action( 'woocommerce_no_products_found', 'wc_no_products_found' );

    } // end function remove_products_from_shop_page


} // end class

$Aerlift_WooCommerce = new Aerlift_WooCommerce();