<?php
function chp_customize_register($wp_customize) {

}
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

add_action('customize_register', 'chp_customize_register');
if ( ! function_exists( 'chp_get_option' ) ) :
    function chp_get_option( $chp_name, $chp_default = false ) {
        $chp_config = get_option( 'chp' );
        if ( ! isset( $chp_config ) ) : return $chp_default; else: $chp_options = $chp_config; endif;
        if ( isset( $chp_options[$chp_name] ) ):  return $chp_options[$chp_name]; else: return $chp_default; endif;
    }
endif;