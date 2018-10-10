<?php 

function learn_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'navbar', array(
		'priority'       => 160,
		'title'          => __( 'Navbar Settings', 'learn' ),
		'description'    => __( 'Change Navbar Settings', 'learn' )
	) );
	
			$wp_customize->add_setting( 'navbar_color', array(
				'type'                 => 'theme_mod',
				'default'              => __( '#343a40', 'learn' )
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize,
				'navbar_color',
				array(
					'label'      => __( 'Navbar Color', 'learn' ),
					'section'    => 'navbar',
					'settings'   => 'navbar_color',
				)
			) );	
	
			$wp_customize->add_setting( 'navbar_align', array(
				'type'                 => 'theme_mod',
				'default'              => __( 'mr-auto', 'learn' )
			) );

			$wp_customize->add_control( 'navbar_align', array(
				'label'       => __( 'Navbar Align', 'learn' ),
				'description' => __( 'Navbar Align Left Right', 'learn' ),
				'section'     => 'navbar',
				'type'        => 'select', // text (default | variations email/url/number/hidden/date), textarea, checkbox, radio/select (requires choices array below), dropdown-pages
				'choices'  => array(
					'ml-auto'  => 'Left',
					'mr-auto' => 'Right',
				),
				'settings'    => 'navbar_align'
			) );
			
	$wp_customize->add_section( 'social', array(
		'priority'       => 160,
		'title'          => __( 'Social Color', 'learn' ),
		'description'    => __( 'Social Color Settings', 'learn' )
	) );

			$wp_customize->add_setting( 'social_color', array(
				'type'                 => 'theme_mod',
				'default'              => __( '#1e73be', 'learn' )
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize,
				'social_color',
				array(
					'label'      => __( 'Social Color', 'learn' ),
					'section'    => 'social',
					'settings'   => 'social_color',
				)
			) );	
	
			
	$wp_customize->add_section( 'learn_slider', array(
		'priority'       => 160,
		'title'          => __( 'Slider', 'learn' ),
		'description'    => __( 'Slider Settings', 'learn' )
	) );

			$wp_customize->add_setting( 'learn_slider_cat', array(
				'type'                 => 'refresh',
				'default'              => 0,
				'sanitize_callback' 	 => 'learn_sanitize_slidecat'
			) );
			
			$wp_customize->add_control( 'learn_slider_cat', array(
				'label'       => __( 'Choose Category', 'learn' ),
				'section'     => 'learn_slider',
				'type'        => 'select',
				'choices'  => learn_cats()
			) );

			$wp_customize->add_setting( 'learn_slider_hide', array(
				'default'              => 0,
				'transport'            => 'refresh',
				'sanitize_callback'    => 'learn_sanitize_checkbox'
			) );
			
			// Control: Name.
			$wp_customize->add_control( 'learn_slider_hide', array(
				'label'       => __( 'Show Slider', 'learn' ),
				'section'     => 'learn_slider',
				'type'        => 'checkbox',
			) );
			
			
} 

/**
 * Adds sanitization callback function: Slider Category (slidecat)
 * @package Learn
 */
function learn_sanitize_slidecat( $input ) {

	if ( array_key_exists( $input ,  learn_cats() ) ) {
		return $input;
	} else {
		return '';
	}

}

function learn_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}


add_action( 'customize_register', 'learn_customize_register' );