<?php  
 /**
     *
     * 	Devkabir20 THEME
     *
     *
     */

    /*-----------------------------------------------------------------------------------*/
    /* CONFIGURATION
    /*-----------------------------------------------------------------------------------*/

       /*
     *	THEME INFO
     */



    /*-----------------------------------------------------------------------------------*/
    /* FRAMEWORK
    /*-----------------------------------------------------------------------------------*/

    require_once get_template_directory() . '/inc/devkabirframework/devkabirframework.php';
    require_once get_template_directory() . '/inc/theme option/customizer.php';
  
  /*-----------------------------------------------------------------------------------*/
    /* ENQUEUE FONTS, STYLES AND SCRIPTS
    /*-----------------------------------------------------------------------------------*/


if(!function_exists('talkwithtech_load_scripts')){
    function talkwithtech_load_scripts(){

        if(!is_admin( )){
            wp_enqueue_style('talkwithrech-theme',get_template_directory_uri().'/assets/css/theme.css',array(),'v1.0.0', 'all' );
        }

    }
}
add_action('wp_enqueue_scripts','talkwithtech_load_scripts' );

 
 

?>