<?php

 /*-----------------------------------------------------------------------------------*/
    /* CUSTOMIZER
    /*-----------------------------------------------------------------------------------*/


function talkwithtech_customize_register($wp_customize){

        /*
         * Top Bar
         */
$wp_customize -> add_section('talkwithtech_topbar_section', array(
    'title'=> esc_html('Top Bar', 'devkabir'),
    'description' => esc_html('This section contains Top bar options.', 'devkabir'),
    'priority' => 11,
));
$wp_customize -> add_setting('topbar_disable_sticky',array(
    'sanitize_callback' => 'devkabir_sanitize_checkbox'
));
$wp_customize -> add_control('topbar_disable_sticky',array(
                'type' => 'checkbox',
                'label' => esc_html('Disable Sticky Behaviour', 'devkabir'),
                'section' => 'talkwithtech_topbar_section',
));
$wp_customize -> add_setting('topbar_hide_navigation',array(
    'sanitize_callback' => 'devkabir_sanitize_checkbox'
));
$wp_customize -> add_control('topbar_hide_navigation',array(
                'type' => 'checkbox',
                'label' => esc_html('Hide Navigation', 'devkabir'),
                'section' => 'talkwithtech_topbar_section',
));
$wp_customize -> add_setting('topbar_hide_search',array(
    'sanitize_callback' => 'devkabir_sanitize_checkbox'
));
$wp_customize -> add_control('topbar_hide_search',array(
                'type' => 'checkbox',
                'label' => esc_html('Hide Search Option', 'devkabir'),
                'section' => 'talkwithtech_topbar_section',
));
$wp_customize -> add_setting('topbar_show_search_mobile',array(
    'sanitize_callback' => 'devkabir_sanitize_checkbox'
));
$wp_customize -> add_control('topbar_show_search_mobile',array(
                'type' => 'checkbox',
                'label' => esc_html('Show Search (Mobile)', 'devkabir'),
                'section' => 'talkwithtech_topbar_section',
));
         

};

add_action('customize_register','talkwithtech_customize_register' );














