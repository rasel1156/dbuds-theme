<?php 

function cust_customizer_settings( $wp_customizer ){
    $wp_customizer ->add_section('logos', array(
        'title'=> 'Websites Logos',
        'priority'=> '30' 
    ));

    //customizer settings
    $wp_customizer ->add_setting('main_logo', array(
        'default'   => get_template_directory_uri().'/assets/images/logo.png',
        'transport'=> 'refresh'
    ));

    $wp_customizer ->add_setting('main_logo_two', array(
        'default'   => get_template_directory_uri().'/assets/images/logo.png',
        'transport'=> 'refresh'
    ));

    $wp_customizer ->add_setting('favi_icon', array(
        'default'   => get_template_directory_uri().'/assets/images/logo.png',
        'transport'=> 'refresh'
    ));


    //customizer control
    $wp_customizer->add_control(
		new WP_Customize_Image_Control(
			$wp_customizer,
			'main_logo_ctrl',
			array(
				'label'      => 'Upload Main Logo',
				'section'    => 'logos',
				'settings'   => 'main_logo',
			)
		)
    );

    $wp_customizer->add_control(
		new WP_Customize_Image_Control(
			$wp_customizer,
			'main_logo_two_ctrl',
			array(
				'label'      => 'Upload Other Logo',
				'section'    => 'logos',
				'settings'   => 'main_logo_two',
			)
		)
    );


    $wp_customizer->add_control(
		new WP_Customize_Image_Control(
			$wp_customizer,
			'favicon',
			array(
				'label'      =>'Upload a Favicon',
				'section'    => 'logos',
				'settings'   => 'favi_icon',
			)
		)
    );
    

}

add_action('customize_register', 'cust_customizer_settings');