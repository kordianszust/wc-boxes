<?php

add_action( 'init', 'register_box_product_type' );
function register_box_product_type() {
    class WC_Box extends WC_Product {

        public function __construct( $product ) {
            $this->product_type = 'box';
            parent::__construct( $product );
        }
    }
}

add_filter( 'product_type_selector', 'add_box_product_type' );
function add_box_product_type( $types ){
    $types[ 'box' ] = __( 'Box product', 'box_product' );
    return $types;
}

?>