<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'cafe_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'cafe-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'cafe-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_header_phone_number_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_header_phone_number',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'cafe_elementor_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_email_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_header_email',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_location_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Address', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_header_location',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_button_heading',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Get Started Button', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button Link', 'cafe-elementor' ),
		'settings' => 'cafe_elementor_header_button_url',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Button Text', 'cafe-elementor' ),
		'settings' => 'cafe_elementor_header_button_text',
		'section'  => 'cafe_elementor_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_cart_box_enable',
		'label'       => esc_html__( 'Enable/Disable Shopping Cart', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_enable_socail_link',
		'section'     => 'cafe_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'cafe-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'cafe_elementor_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'cafe-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'cafe-elementor' ),
		'settings'     => 'cafe_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'cafe-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'cafe-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'cafe-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'cafe_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'cafe-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'cafe-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_text_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cafe_elementor_footer_text',
		'section'  => 'cafe_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cafe_elementor_footer_enable_heading',
		'section'     => 'cafe_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'cafe-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cafe_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cafe-elementor' ),
		'section'     => 'cafe_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cafe-elementor' ),
			'off' => esc_html__( 'Disable', 'cafe-elementor' ),
		],
	] );
}
