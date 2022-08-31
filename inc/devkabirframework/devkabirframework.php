 <?php
  /*-----------------------------------------------------------------------------------*/
    /* 5. SANITIZATION
    /*-----------------------------------------------------------------------------------*/

        /**
     * Sanitize a string for theme rendering within HTML
     * @param  string $input String to be sanitized
     * @return string        Sanitized string
     */
    function devkabir_sanitize_text($input){
        return wp_kses_post(force_balance_tags($input));
    }
    /**
     * Sanitize a checkbox value
     * @param  int $input Checkbox input value
     * @return int        Sanitized checkbox value
     */
    function devkabir_sanitize_checkbox($input){
        if($input == 1){
            return 1;
        }else{
            return '';
        }
    }

        /**
     * Sanitize file upload URL
     * @param  string $input URL string to sanitize
     * @return string        Sanitized URL string
     */
    function devkabir_sanitize_file_upload($input){
        return esc_url_raw($input);
    }


 /*-----------------------------------------------------------------------------------*/
    /* 8. CUSTOMIZER
    /*-----------------------------------------------------------------------------------*/


    function devkabir_customize_register($wp_customize){
        /*
         * GENERAL SECTION
         */

$wp_customize -> add_section('devkabir_general_section', array(
'title' => esc_html('General','devkabir' ),
'description' =>esc_html('This section contains general theme options.', 'devkabir'),
'priority' => 9,
) );
   $wp_customize->add_setting('general_blog_description',
        array(
            'sanitize_callback' => 'devkabir_sanitize_text'
        ));
        $wp_customize->add_control('general_blog_description',
            array(
                'label' => esc_html('Blog Profile Description', 'devkabir'),
                'section' => 'devkabir_general_section',
                'type' => 'textarea',
            )
        );

    $wp_customize -> add_setting('general_use_custom_date_format',array(
            'sanitize_callback' => 'devkabir_sanitize_checkbox'
        ));
        $wp_customize -> add_control('general_use_custom_date_format',array(
            'type' => "checkbox",
            'label' => esc_html('Use WordPress Date Format', 'devkabir'),
            'section' => 'devkabir_general_section',
        ));
    $wp_customize -> add_setting('general_hidecomments',array(
            'sanitize_callback' => 'devkabir_sanitize_checkbox'
        ));
        $wp_customize -> add_control('general_hidecomments',array(
            'type' => "checkbox",
            'label' => esc_html('Hide Comments on Load', 'devkabir'),
            'section' => 'devkabir_general_section',
        ));
    $wp_customize -> add_setting('general_use_extended_char_set',array(
            'sanitize_callback' => 'devkabir_sanitize_checkbox'
        ));
        $wp_customize -> add_control('general_use_extended_char_set',array(
            'type' => "checkbox",
            'label' => esc_html('Use Extended Character Set', 'devkabir'),
            'section' => 'devkabir_general_section',
        ));
    $wp_customize -> add_setting('general_use_unminified_css',array(
            'sanitize_callback' => 'devkabir_sanitize_checkbox'
        ));
        $wp_customize -> add_control('general_use_unminified_css',array(
            'type' => "checkbox",
            'label' => esc_html('Use Unminified CSS Source', 'devkabir'),
            'section' => 'devkabir_general_section',
        ));

        /*
         * BRANDING SECTION
         */

              $wp_customize->add_section('devkabir_branding_section',
            array(
                'title' => esc_html('Branding', 'devkabir'),
                'description' => esc_html('This section contains branding/logo theme options.', 'devkabir'),
                'priority' => 11,
            )
        );

            $wp_customize -> add_setting('general_blog_image',array(
                'sanitize_callback' => 'devkabir_sanitize_file_upload'
            ));
         $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'general_blog_image',
                array(
                    'label' => esc_html('Blog Logo', 'devkabir'),
                    'section' => 'devkabir_branding_section',
                    'settings' => 'general_blog_image'
                )
            )
        );
 $wp_customize->add_setting('general_blog_image_retina',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'general_blog_image_retina',
                array(
                    'label' => esc_html('Blog Logo (Retina - @2x file name)', 'devkabir'),
                    'section' => 'devkabir_branding_section',
                    'settings' => 'general_blog_image_retina'
                )
            )
        );

        $wp_customize->add_setting('general_blog_light_image',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'general_blog_light_image',
                array(
                    'label' => esc_html('Blog Logo (Light)', 'devkabir'),
                    'section' => 'devkabir_branding_section',
                    'settings' => 'general_blog_light_image'
                )
            )
        );

        $wp_customize->add_setting('general_blog_image_light_retina',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'general_blog_image_light_retina',
                array(
                    'label' => esc_html('Blog Logo (Light) (Retina - @2x file name)', 'devkabir'),
                    'section' => 'devkabir_branding_section',
                    'settings' => 'general_blog_image_light_retina'
                )
            )
        );



};

 add_action('customize_register', 'devkabir_customize_register');
 
 
 
 
 
 
 
 
 
 
 ?>