<?php
if ( ! function_exists( '_beacon_customizer_config' ) ) {
    function _beacon_customizer_config( $configs ){

        $config = array(
            array(
                'name' => '_beacon_panel',
                'type' => 'panel',
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Beacon Panel', '_beacon' ),
            ),

            array(
                'name' => '_beacon_section',
                'type' => 'section',
                'panel' => '_beacon_panel',
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Beacon Section', '_beacon' ),
                'description' => __( 'This is section description' ),
            ),


            array(
                'name' => 'select',
                'type' => 'select',
                //'device_settings' => true,
                'default' => '',
                'section'     => '_beacon_section',
                //'priority' => 22,
                'title'          => __( 'Select', '_beacon' ),
                'description'    => __( 'Select 2 to show Dependence field' ),
                'choices' => array(
                    '1' => __( 'One', '_beacon' ),
                    '2' => __( 'Two', '_beacon' ),
                    '3' => __( 'Three', '_beacon' ),
                )
            ),

            array(
                'name' => 'dependence_text',
                'type' => 'text',
                'device_settings' => true,
                'default'           => null,
                'transport'			=> 'postMessage', // or refresh
                'section' => '_beacon_section',
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Dependence Text Field', '_beacon' ),
                'description'   => __( 'Show only select=2' ),
                'required'      => array( 'select','==','2' )
            ),



            array(
                'name' => 'text',
                'type' => 'text',
                //'device_settings' => true,
                //'sanitize_callback' => '',
                'default'           => null,
                'section' => '_beacon_section',
                //'priority' => 22,
                'theme_supports' => '',
                'device' => 'mobile',
                'title'          => __( 'Text', '_beacon' ),
                'description' => __( 'This is description' ),


                'selector' => '._test_text1',
                'render_callback' => '_test_1_render_callback'
            ),

            array(
                'name' => 'text2',
                'type' => 'text',
                'device_settings' => true,
                'sanitize_callback' => '',
                'default'           => null,
                'section' => '_beacon_section',
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Text 2 Inside the Text', '_beacon' ),
                'description' => __( 'This is description' ),

                //'selector' => '._test_text_2',
                //'render_callback' => '_test_2_render_callback'
            ),

            array(
                'name' => 'slider',
                'type' => 'slider',
                'device_settings' => true,
                'default' => '',
                'section' => '_beacon_section',
                //'device' => 'mobile', // mobile || general
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Slider', '_beacon' ),
                'description' => __( 'This is description' ),
                'selector' => 'h4',
                'css_format' => 'font-size: {{value}}'
            ),

            array(
                'name' => 'css_ruler',
                'device_settings' => true,
                'type'      => 'css_ruler',
                'default'           => null,
                'transport'			=> 'postMessage', // or refresh
                'section'           => '_beacon_section',
                'theme_supports' => '',
                'title'          => __( 'CSS Ruler', '_beacon' ),
                'description'   => __( 'This is description' ),
                'selector' => 'h4',
                'css_format' => array(
                    'top'    => 'padding-top: {{value}}',
                    'right'  => 'padding-right: {{value}}',
                    'bottom' => 'padding-bottom: {{value}}',
                    'left'   => 'padding-left: {{value}}',
                )
            ),

            array(
                'name' => 'icon',
                'type' => 'icon',
                'device_settings' => true,
                'default' => '',
                'section' => '_beacon_section',
                //'device' => 'mobile', // mobile || general
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Icon', '_beacon' ),
                'description' => __( 'This is description' ),
            ),

            array(
                'name' => 'textarea',
                'type' => 'textarea',
                'device_settings' => true,
                'default' => '',
                'section' => '_beacon_section',
                //'device' => 'mobile', // mobile || general
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Textarea', '_beacon' ),
                'description' => __( 'This is description' ),
            ),

            array(
                'name'  => 'checkbox',
                'type'  => 'checkbox',
                'device_settings' => true,
                'label'       => __( 'Checkbox', '_beacon' ),
                'section'     => '_beacon_section',
                'description' => __( 'This is description' ),
                'setting_type' => 'checkbox',
                'checkbox_label' => __( 'This is checkbox label' ),
            ),



            array(
                'name' => 'radio',
                'type' => 'radio',
                'device_settings' => true,
                'default' => '',
                'section'     => '_beacon_section',
                //'priority' => 22,
                'title'          => __( 'Radio', '_beacon' ),
                'description'    => __( 'This is description' ),
                'choices' => array(
                    '1' => __( 'One', '_beacon' ),
                    '2' => __( 'Two', '_beacon' ),
                    '3' => __( 'Three', '_beacon' ),
                )
            ),


            array(
                'name' => 'color',
                'device_settings' => true,
                'type' => 'color',
                'default'           => null,
                'transport'			=> 'postMessage', // or refresh
                'section'           => '_beacon_section',
                'theme_supports' => '',
                'title'          => __( 'Color', '_beacon' ),
                'description'   => __( 'This is description' ),
                'selector' => 'h4',
                'css_format' => 'color: {{value}}'
            ),



            array(
                'name' => 'multiple_dependence_text',
                'type' => 'text',
                'device_settings' => true,
                'default'           => null,
                'transport'			=> 'postMessage', // or refresh
                'section' => '_beacon_section',
                //'priority' => 22,
                'theme_supports' => '',
                'title'          => __( 'Multiple Dependence Text Field', '_beacon' ),
                'description'   => __( 'Show only select=3 and radio=2' ),
                'required'      => array(
                    array( 'select','==','3' ),
                    array( 'radio','==','2' )
                )
            ),

            array(
                'name' => 'repeater',
                'type' => 'repeater',
                'section'     => '_beacon_section',
                //'priority' => 22,
                'title'          => __( 'Repeater', '_beacon' ),
                'description'    => __( 'This is description' ),
                'live_title_field' => 'title',
                'limit' => 4,
                'limit_msg' => __( 'Just limit 4 item, Ability HTML here' ),
                'default' => array(
                    array(
                        'title' => __( 'Title 1', '_beacon' ),
                        'content' => __( 'Content 1', '_beacon' ),
                    ),
                    array(
                        'title' => __( 'Title 2', '_beacon' ),
                        'content' => __( 'Content 2', '_beacon' ),
                    )
                ),
                'fields' => array(
                    array(
                        'name' => 'title',
                        'type' => 'text',
                        'label' => __( 'Title', '_beacon' ),
                    ),
                    array(
                        'name' => 'slider',
                        'type' => 'slider',
                        'device_settings' => true,
                        'label' => __( 'Slider', '_beacon' ),
                    ),
                    array(
                        'name' => 'image',
                        'type' => 'image',
                        'label' => __( 'Image', '_beacon' ),
                    ),
                    array(
                        'name' => 'select',
                        'type' => 'select',
                        'label' => __( 'Select', '_beacon' ),
                        'description' => __( 'Select 2 to show text area', '_beacon' ),
                        'choices' => array(
                            1 => 1,
                            2 => 2,
                            3=> 3
                        )
                    ),
                    array(
                        'name' => 'content',
                        'type' => 'textarea',
                        'label' => __( 'Textarea', '_beacon' ),
                        'required' =>  array( 'select','==','2' )
                    ),
                )
            ),

            array(
                'name' => 'group',
                'type' => 'group',
                'section'     => '_beacon_section',
                //'priority' => 22,
                'title'          => __( 'Group', '_beacon' ),
                'description'    => __( 'This is description' ),
                'live_title_field' => 'title',
                'default' => array(
                    'title' => __( 'Title 1', '_beacon' ),
                    'content' => __( 'Content 1', '_beacon' ),
                ),
                'fields' => array(
                    array(
                        'name' => 'title',
                        'type' => 'text',
                        'device_settings' => true,
                        'label' => __( 'Title', '_beacon' ),
                    ),
                    array(
                        'name' => 'image',
                        'type' => 'image',
                        'label' => __( 'Image', '_beacon' ),
                    ),
                    array(
                        'name' => 'select',
                        'type' => 'select',
                        'label' => __( 'Select', '_beacon' ),
                        'description' => __( 'Select 2 to show text area', '_beacon' ),
                        'choices' => array(
                            1 => 1,
                            2 => 2,
                            3=> 3
                        )
                    ),
                    array(
                        'name' => 'content',
                        'type' => 'textarea',
                        'label' => __( 'Textarea', '_beacon' ),
                        'required' =>  array( 'select','==','2' )
                    ),


                )
            ),


            array(
                'name' => 'background',
                'type' => 'group',
                'section'     => '_beacon_section',
                'title'          => __( 'Background', '_beacon' ),
                'description'    => __( 'This is description' ),
                'live_title_field' => 'title',
                'field_class' => '_beacon-background-field',
                'selector' => '#page',
                'css_format' => 'background',
                'device_settings' => true,
                'default' => array(

                ),
                'fields' => array(
                    array(
                        'name' => 'color',
                        'type' => 'color',
                        'label' => __( 'Color', '_beacon' ),
                        'device_settings' => true,
                    ),
                    array(
                        'name' => 'image',
                        'type' => 'image',
                        'label' => __( 'Image', '_beacon' ),
                        //'device_settings' => true,
                    ),
                    array(
                        'name' => 'cover',
                        'type' => 'checkbox',
                        'required' => array( 'image', 'not_empty', ''),
                        'label' => __( 'Background cover', '_beacon' ),
                    ),
                    array(
                        'name' => 'position',
                        'type' => 'select',
                        'label' => __( 'Background Position', '_beacon' ),
                        'required' => array( 'image', 'not_empty', ''),
                        'choices' => array(
                            'default' => __( 'Default', '_beacon' ),
                            'center' => __( 'Center', '_beacon' ),
                            'top_left' => __( 'Top Left', '_beacon' ),
                            'top_right' => __( 'Top Right', '_beacon' ),
                            'top_center' => __( 'Top Center', '_beacon' ),
                            'bottom_left' => __( 'Bottom Left', '_beacon' ),
                            'bottom_center' => __( 'Bottom Center', '_beacon' ),
                            'bottom_right' => __( 'Bottom Right', '_beacon' ),
                        ),
                    ),

                    array(
                        'name' => 'repeat',
                        'type' => 'select',
                        'label' => __( 'Background Repeat', '_beacon' ),
                        'required' => array(
                            array('image', 'not_empty', ''),
                           // array('style', '!=', 'cover' ),
                        ),
                        'choices' => array(
                            'default' => __( 'Default', '_beacon' ),
                            'no-repeat' => __( 'No-repeat', '_beacon' ),
                            'repeat-x' => __( 'Repeat Horizontal', '_beacon' ),
                            'repeat-y' => __( 'Repeat Vertical', '_beacon' ),
                        ),
                    ),

                    array(
                        'name' => 'attachment',
                        'type' => 'select',
                        'label' => __( 'Background Attachment', '_beacon' ),
                        'required' => array(
                            array('image', 'not_empty', ''),
                            // array('style', '!=', 'cover' ),
                        ),
                        'choices' => array(
                            'default' => __( 'Default', '_beacon' ),
                            'scroll' => __( 'Scroll', '_beacon' ),
                            'fixed' => __( 'Fixed', '_beacon' )
                        ),
                    ),

                )
            ),


        );

        return array_merge( $configs, $config );
    }
}

add_filter( '_beacon/customizer/config', '_beacon_customizer_config' );