<?php
/**
 * Bakes and Cakes Theme Info
 *
 * @package bakes_and_cakes
 */

function bakes_and_cakes_customizer_demo_content( $wp_customize ) {
	
    $wp_customize->add_section( 'theme_demo_content' , array(
		'title'       => __( 'Demo Content Import' , 'bakes-and-cakes' ),
		'priority'    => 7,
		));
        
    $wp_customize->add_setting(
		'demo_content_instruction',
		array(
			'sanitize_callback' => 'sanitize_text_field'
		)
	);

    $demo_content_description = sprintf( __( 'Bakes and Cakes comes with demo content import feature. You can import the demo content with just one click. For step-by-step video tutorial, %1$sClick here%2$s', 'bakes-and-cakes' ), '<a class="documentation" href="' . esc_url( 'https://rarathemes.com/blog/import-demo-content-rara-themes/' ) . '" target="_blank">', '</a>' );

	$wp_customize->add_control(
		new Bakes_And_Cakes_Theme_Info( 
			$wp_customize,
			'demo_content_instruction',
			array(
				'section'		=> 'theme_demo_content',
				'description'	=> $demo_content_description
			)
		)
	);
    
	$theme_demo_content_desc = '';

	if( ! class_exists( 'RDDI_init' ) ) {
		$theme_demo_content_desc .= '<span class="sticky_info_row"><label class="row-element">' . __( 'Plugin required', 'bakes-and-cakes' ) . ': </label><a href="' . esc_url( 'https://wordpress.org/plugins/rara-one-click-demo-import/' ) . '" target="_blank">' . __( 'Rara One Click Demo Import', 'bakes-and-cakes' ) . '</a></span><br />';
	}

	$theme_demo_content_desc .= '<span class="sticky_info_row download-link"><label class="row-element">' . __( 'Download Demo Content Zip File', 'bakes-and-cakes' ) . ': </label><a href="' . esc_url( 'https://docs.rarathemes.com/docs/bakes-and-cakes/theme-activation-and-installation/how-to-import-demo-content/' ) . '" target="_blank">' . __( 'here', 'bakes-and-cakes' ) . '</a></span><br />';

	$wp_customize->add_setting( 'theme_demo_content_info',array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
		));

	// Demo content 
	$wp_customize->add_control( new Bakes_And_Cakes_Theme_Info( $wp_customize ,'theme_demo_content_info',array(
		'section'     => 'theme_demo_content',
		'description' => $theme_demo_content_desc
		)));

}
add_action( 'customize_register', 'bakes_and_cakes_customizer_demo_content' );