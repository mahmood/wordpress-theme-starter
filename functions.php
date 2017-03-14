<?php 
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxCore/framework.php' ) ) {
    require_once(dirname(__FILE__) . '/ReduxCore/framework.php');
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/options/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/options/sample-config.php' );
}
