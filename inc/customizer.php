<?php 

function windy_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'navbar', array(
		'priority'       => 160,
		'title'          => __( 'Navbar Settings', 'windy' ),
		'description'    => __( 'Change Navbar Settings', 'windy' )
	) );
	
			$wp_customize->add_setting( 'navbar_color', array(
				'type'                 => 'theme_mod',
				'default'              => __( '#3f72af', 'windy' )
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize,
				'navbar_color',
				array(
					'label'      => __( 'Navbar Color', 'windy' ),
					'section'    => 'navbar',
					'settings'   => 'navbar_color',
				)
			) );	
	
			$wp_customize->add_setting( 'navbar_align', array(
				'type'                 => 'theme_mod',
				'default'              => __( 'ml-auto', 'windy' )
			) );

			$wp_customize->add_control( 'navbar_align', array(
				'label'       => __( 'Navbar Align', 'windy' ),
				'description' => __( 'Navbar Align Left Right', 'windy' ),
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
		'title'          => __( 'Social Color', 'windy' ),
		'description'    => __( 'Social Color Settings', 'windy' )
	) );

			$wp_customize->add_setting( 'social_color', array(
				'type'                 => 'theme_mod',
				'default'              => __( '#fff', 'windy' )
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control(
				$wp_customize,
				'social_color',
				array(
					'label'      => __( 'Social Color', 'windy' ),
					'section'    => 'social',
					'settings'   => 'social_color',
				)
			) );	
	
			
	$wp_customize->add_section( 'windy_slider', array(
		'priority'       => 160,
		'title'          => __( 'Slider', 'windy' ),
		'description'    => __( 'Slider Settings', 'windy' )
	) );

			$wp_customize->add_setting( 'windy_slider_cat', array(
				'type'                 => 'refresh',
				'default'              => 0,
				'sanitize_callback' 	 => 'windy_sanitize_slidecat'
			) );
			
			$wp_customize->add_control( 'windy_slider_cat', array(
				'label'       => __( 'Choose Category', 'windy' ),
				'section'     => 'windy_slider',
				'type'        => 'select',
				'choices'  => windy_cats()
			) );

			$wp_customize->add_setting( 'windy_slider_hide', array(
				'default'              => 0,
				'transport'            => 'refresh',
				'sanitize_callback'    => 'windy_sanitize_checkbox'
			) );
			
			// Control: Name.
			$wp_customize->add_control( 'windy_slider_hide', array(
				'label'       => __( 'Show Slider', 'windy' ),
				'section'     => 'windy_slider',
				'type'        => 'checkbox',
			) );
			
			
} 

/**
 * Adds sanitization callback function: Slider Category (slidecat)
 * @package windy
 */
function windy_sanitize_slidecat( $input ) {

	if ( array_key_exists( $input ,  windy_cats() ) ) {
		return $input;
	} else {
		return '';
	}

}

function windy_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}


add_action( 'customize_register', 'windy_customize_register' );