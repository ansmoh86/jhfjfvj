<?php

/**
 * Returns share icons HTML
 *
 * @return string
 */
if ( ! function_exists( 'boldthemes_get_share_html2' ) ) {
	function boldthemes_get_share_html2( $permalink, $type = 'blog', $size = 'btIcoExtraSmallSize', $style = 'btIcoOutlineType btIcoDefaultColor' ) {
		$share_facebook = boldthemes_get_option( $type . '_share_facebook' );
		$share_twitter = boldthemes_get_option( $type . '_share_twitter' );
		$share_google_plus = boldthemes_get_option( $type . '_share_google_plus' );
		$share_linkedin = boldthemes_get_option( $type . '_share_linkedin' );
		$share_vk = boldthemes_get_option( $type . '_share_vk' );

		BoldThemesFramework::$share_html = '';
		if ( $share_facebook || $share_twitter || $share_google_plus || $share_linkedin || $share_vk ) {
			
			if ( $share_facebook ) {
				BoldThemesFramework::$share_html .= boldthemes_get_icon_html( 'fa_f09a', boldthemes_get_share_link( 'facebook', $permalink ), '', $style . ' '  . $size . ' btIcoFacebook' );
			}
			if ( $share_twitter ) {
				BoldThemesFramework::$share_html .= boldthemes_get_icon_html( 'fa_f099', boldthemes_get_share_link( 'twitter', $permalink ), '', $style . ' '  . $size . ' btIcoTwitter'  );
			}
			if ( $share_linkedin ) {
				BoldThemesFramework::$share_html .= boldthemes_get_icon_html( 'fa_f0e1', boldthemes_get_share_link( 'linkedin', $permalink ), '', $style . ' '  . $size . ' btIcoLinkedin'  );
			}
			if ( $share_google_plus ) {
				BoldThemesFramework::$share_html .= boldthemes_get_icon_html( 'fa_f0d5', boldthemes_get_share_link( 'google_plus', $permalink ), '', $style . ' '  . $size . ' btIcoGooglePlus'  );
			}
			if ( $share_vk ) {
				BoldThemesFramework::$share_html .= boldthemes_get_icon_html( 'fa_f189', boldthemes_get_share_link( 'vk', $permalink ), '', $style . ' '  . $size . ' btIcoVK'  );
			}
		}
		return BoldThemesFramework::$share_html;
	}
}

// CUSTOM JS TOP
if ( ! function_exists( 'boldthemes_customize_custom_js_top' ) ) {
	function boldthemes_customize_custom_js_top( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[custom_js_top]', array(
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_custom_js'
		));
		$wp_customize->add_control( new BoldThemes_Customize_Textarea_Control( 
			$wp_customize, 
			'custom_js_top', array(
				'label'    => esc_html__( 'Custom JS (Top)', 'boldthemes_framework_textdomain' ),
				'section'  => BoldThemesFramework::$pfx . '_general_section',
				'priority' => 120,
				'settings' => BoldThemesFramework::$pfx . '_theme_options[custom_js_top]'
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_custom_js_top', 20 );

// CUSTOM JS BOTTOM
if ( ! function_exists( 'boldthemes_customize_custom_js_bottom' ) ) {
	function boldthemes_customize_custom_js_bottom( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[custom_js_bottom]', array(
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_custom_js'
		));
		$wp_customize->add_control( new BoldThemes_Customize_Textarea_Control( 
			$wp_customize, 
			'custom_js_bottom', array(
				'label'    => esc_html__( 'Custom JS (Bottom)', 'boldthemes_framework_textdomain' ),
				'section'  => BoldThemesFramework::$pfx . '_general_section',
				'priority' => 130,
				'settings' => BoldThemesFramework::$pfx . '_theme_options[custom_js_bottom]'
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_custom_js_bottom', 20 );


/* BLOG */

// SHARE ON FACEBOOK
if ( ! function_exists( 'boldthemes_customize_blog_share_facebook' ) ) {
	function boldthemes_customize_blog_share_facebook( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blog_share_facebook]', array(
			'default'           => BoldThemes_Customize_Default::$data['blog_share_facebook'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'blog_share_facebook', array(
			'label'    => esc_html__( 'Share on Facebook', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_blog_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[blog_share_facebook]',
			'priority' => 18,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blog_share_facebook', 20 );
		
// SHARE ON TWITTER
if ( ! function_exists( 'boldthemes_customize_blog_share_twitter' ) ) {
	function boldthemes_customize_blog_share_twitter( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blog_share_twitter]', array(
			'default'           => BoldThemes_Customize_Default::$data['blog_share_twitter'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'blog_share_twitter', array(
			'label'    => esc_html__( 'Share on Twitter', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_blog_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[blog_share_twitter]',
			'priority' => 20,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blog_share_twitter', 20 );
		
// SHARE ON GOOGLE PLUS
if ( ! function_exists( 'boldthemes_customize_blog_share_google_plus' ) ) {
	function boldthemes_customize_blog_share_google_plus( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blog_share_google_plus]', array(
			'default'           => BoldThemes_Customize_Default::$data['blog_share_google_plus'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'blog_share_google_plus', array(
			'label'    => esc_html__( 'Share on Google Plus', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_blog_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[blog_share_google_plus]',
			'priority' => 30,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blog_share_google_plus', 20 );
		
// SHARE ON LINKEDIN
if ( ! function_exists( 'boldthemes_customize_blog_share_linkedin' ) ) {
	function boldthemes_customize_blog_share_linkedin( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blog_share_linkedin]', array(
			'default'           => BoldThemes_Customize_Default::$data['blog_share_linkedin'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'blog_share_linkedin', array(
			'label'    => esc_html__( 'Share on LinkedIn', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_blog_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[blog_share_linkedin]',
			'priority' => 40,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blog_share_linkedin', 20 );
		
// SHARE ON VK
if ( ! function_exists( 'boldthemes_customize_blog_share_vk' ) ) {
	function boldthemes_customize_blog_share_vk( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[blog_share_vk]', array(
			'default'           => BoldThemes_Customize_Default::$data['blog_share_vk'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'blog_share_vk', array(
			'label'    => esc_html__( 'Share on VK', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_blog_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[blog_share_vk]',
			'priority' => 50,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_blog_share_vk', 20 );


/* PORTFOLIO */

// SHARE ON FACEBOOK
if ( ! function_exists( 'boldthemes_customize_pf_share_facebook' ) ) {
	function boldthemes_customize_pf_share_facebook( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_share_facebook]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_share_facebook'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'pf_share_facebook', array(
			'label'    => esc_html__( 'Share on Facebook', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_share_facebook]',
			'priority' => 10,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_share_facebook' );
	
// SHARE ON TWITTER
if ( ! function_exists( 'boldthemes_customize_pf_share_twitter' ) ) {
	function boldthemes_customize_pf_share_twitter( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_share_twitter]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_share_twitter'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'pf_share_twitter', array(
			'label'    => esc_html__( 'Share on Twitter', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_share_twitter]',
			'priority' => 20,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_share_twitter' );

// SHARE ON GOOGLE PLUS
if ( ! function_exists( 'boldthemes_customize_pf_share_google_plus' ) ) {
	function boldthemes_customize_pf_share_google_plus( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_share_google_plus]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_share_google_plus'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'pf_share_google_plus', array(
			'label'    => esc_html__( 'Share on Google Plus', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_share_google_plus]',
			'priority' => 30,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_share_google_plus' );

// SHARE ON LINKEDIN
if ( ! function_exists( 'boldthemes_customize_pf_share_linkedin' ) ) {
	function boldthemes_customize_pf_share_linkedin( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_share_linkedin]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_share_linkedin'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'pf_share_linkedin', array(
			'label'    => esc_html__( 'Share on LinkedIn', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_share_linkedin]',
			'priority' => 40,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_share_linkedin' );

// SHARE ON VK
if ( ! function_exists( 'boldthemes_customize_pf_share_vk' ) ) {
	function boldthemes_customize_pf_share_vk( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[pf_share_vk]', array(
			'default'           => BoldThemes_Customize_Default::$data['pf_share_vk'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'pf_share_vk', array(
			'label'    => esc_html__( 'Share on VK', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_pf_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[pf_share_vk]',
			'priority' => 50,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_pf_share_vk' );


/* SHOP */

// SHARE ON FACEBOOK
if ( ! function_exists( 'boldthemes_customize_shop_share_facebook' ) ) {
	function boldthemes_customize_shop_share_facebook( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[shop_share_facebook]', array(
			'default'           => BoldThemes_Customize_Default::$data['shop_share_facebook'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'shop_share_facebook', array(
			'label'    => esc_html__( 'Share on Facebook', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_shop_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[shop_share_facebook]',
			'priority' => 10,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_shop_share_facebook', 20 );

// SHARE ON TWITTER
if ( ! function_exists( 'boldthemes_customize_shop_share_twitter' ) ) {
	function boldthemes_customize_shop_share_twitter( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[shop_share_twitter]', array(
			'default'           => BoldThemes_Customize_Default::$data['shop_share_twitter'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'shop_share_twitter', array(
			'label'    => esc_html__( 'Share on Twitter', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_shop_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[shop_share_twitter]',
			'priority' => 20,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_shop_share_twitter', 20 );

// SHARE ON GOOGLE PLUS
if ( ! function_exists( 'boldthemes_customize_shop_share_google_plus' ) ) {
	function boldthemes_customize_shop_share_google_plus( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[shop_share_google_plus]', array(
			'default'           => BoldThemes_Customize_Default::$data['shop_share_google_plus'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'shop_share_google_plus', array(
			'label'    => esc_html__( 'Share on Google Plus', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_shop_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[shop_share_google_plus]',
			'priority' => 30,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_shop_share_google_plus', 20 );

// SHARE ON LINKEDIN
if ( ! function_exists( 'boldthemes_customize_shop_share_linkedin' ) ) {
	function boldthemes_customize_shop_share_linkedin( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[shop_share_linkedin]', array(
			'default'           => BoldThemes_Customize_Default::$data['shop_share_linkedin'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'shop_share_linkedin', array(
			'label'    => esc_html__( 'Share on LinkedIn', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_shop_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[shop_share_linkedin]',
			'priority' => 40,
			'type'     => 'checkbox'
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_shop_share_linkedin', 20 );

// SHARE ON VK
if ( ! function_exists( 'boldthemes_customize_shop_share_vk' ) ) {
	function boldthemes_customize_shop_share_vk( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[shop_share_vk]', array(
			'default'           => BoldThemes_Customize_Default::$data['shop_share_vk'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'shop_share_vk', array(
			'label'    => esc_html__( 'Share on VK', 'boldthemes_framework_textdomain' ),
			'section'  => BoldThemesFramework::$pfx . '_shop_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[shop_share_vk]',
			'priority' => 50,
			'type'     => 'checkbox'
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_shop_share_vk', 20 );