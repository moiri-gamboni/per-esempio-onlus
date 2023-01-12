 <?php
// Adds WPBakery text input for custom portfolio links in sliders and masonries
// 2 modifications

$thb_animation_array = array(
	'type'        => 'dropdown',
	'heading'     => esc_html__( 'Animation', 'werkstatt' ),
	'param_name'  => 'animation',
	'description' => esc_html__( 'You can add an animation to your element here.', 'werkstatt' ),
	'value'       => array(
		'None'               => '',
		'Right to Left'      => 'animation right-to-left',
		'Left to Right'      => 'animation left-to-right',
		'Right to Left - 3D' => 'animation right-to-left-3d',
		'Left to Right - 3D' => 'animation left-to-right-3d',
		'Bottom to Top'      => 'animation bottom-to-top',
		'Top to Bottom'      => 'animation top-to-bottom',
		'Bottom to Top - 3D' => 'animation bottom-to-top-3d',
		'Top to Bottom - 3D' => 'animation top-to-bottom-3d',
		'Scale'              => 'animation scale',
		'Fade'               => 'animation fade-in',
	),
);

$thb_column_array = array(
	'1 Columns' => 'large-12',
	'2 Columns' => 'large-6',
	'3 Columns' => 'large-4',
	'4 Columns' => 'medium-6 large-3',
	'5 Columns' => 'medium-4 thb-5',
	'6 Columns' => 'medium-4 large-2',
);

$thb_filter_array = array(
	'Style 1 - Default'          => 'style1',
	'Style 1 - Default (Static)' => 'style1 alt',
	'Style 2 - Regular'          => 'style2',
	'Style 3 - With Counts'      => 'style3',
	'Style 4 - Menu Items'       => 'style4',
);

$thb_button_style_array = array(
	''                                => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style1.png',
	'thb-border-style'                => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style2.png',
	'thb-text-style'                  => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style3.png',
	'thb-3d-style'                    => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style4.png',
	'thb-fill-style'                  => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style5.png',
	'thb-pill-style'                  => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style6.png',
	'thb-pill-style thb-border-style' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style7.png',
	'thb-border-line-style'           => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/button_styles/style8.png',
);

$thb_portfolio_hover_style_array = array(
	''                        => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/default.jpg',
	'thb-default-small'       => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/default-small.jpg',
	'thb-image-hover'         => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/show-hover-image.jpg',
	'thb-border-hover'        => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/border.jpg',
	'thb-push-top'            => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/push-top.jpg',
	'thb-push-bottom'         => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/push-bottom.jpg',
	'thb-gradient-hover'      => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/gradient.jpg',
	'thb-corner-hover'        => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/corner-cut.jpg',
	'thb-corner-arrow'        => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/corner-arrow.jpg',
	'thb-underline-hover'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/underline.jpg',
	'thb-gradient-fill-hover' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/gradient-fill.jpg',
	'thb-image-blur'          => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/hover_styles/image-blur.jpg',
);

$thb_offset_array = array(
	'-125%' => '-125%',
	'-120%' => '-120%',
	'-115%' => '-115%',
	'-110%' => '-110%',
	'-105%' => '-105%',
	'-100%' => '-100%',
	'-95%'  => '-95%',
	'-90%'  => '-90%',
	'-85%'  => '-85%',
	'-80%'  => '-80%',
	'-75%'  => '-75%',
	'-70%'  => '-70%',
	'-65%'  => '-65%',
	'-60%'  => '-60%',
	'-55%'  => '-55%',
	'-50%'  => '-50%',
	'-45%'  => '-45%',
	'-40%'  => '-40%',
	'-35%'  => '-35%',
	'-30%'  => '-30%',
	'-25%'  => '-25%',
	'-20%'  => '-20%',
	'-15%'  => '-15%',
	'-10%'  => '-10%',
	'-5%'   => '-5%',
	'0%'    => '0%',
	'5%'    => '5%',
	'10%'   => '10%',
	'15%'   => '15%',
	'20%'   => '20%',
	'25%'   => '25%',
	'30%'   => '30%',
	'35%'   => '35%',
	'40%'   => '40%',
	'45%'   => '45%',
	'50%'   => '50%',
	'55%'   => '55%',
	'60%'   => '60%',
	'65%'   => '65%',
	'70%'   => '70%',
	'75%'   => '75%',
	'80%'   => '80%',
	'85%'   => '85%',
	'90%'   => '90%',
	'95%'   => '95%',
	'100%'  => '100%',
	'105%'  => '105%',
	'110%'  => '110%',
	'115%'  => '115%',
	'120%'  => '120%',
	'125%'  => '125%',
);
function thb_vc_gradient_direction( $group_name = 'Styling' ) {
	return array(
		'type'             => 'dropdown',
		'heading'          => esc_html__( 'Gradient Direction', 'werkstatt' ),
		'param_name'       => 'bg_gradient_direction',
		'class'            => 'hidden-label',
		'description'      => esc_html__( 'You can change the gradient direction here.', 'werkstatt' ),
		'group'            => $group_name,
		'edit_field_class' => 'vc_col-sm-6',
		'value'            => array(
			'Top to Bottom'            => '0',
			'Bottom Left to Top Right' => '-135',
			'Top Left to Bottom Right' => '-45',
			'Left to Right'            => '-90',
		),
		'std'              => '-135',
	);
}
function thb_vc_gradient_color1( $group_name = 'Styling' ) {
	return array(
		'type'             => 'colorpicker',
		'heading'          => esc_html__( 'Background Gradient Color 1', 'werkstatt' ),
		'param_name'       => 'bg_gradient1',
		'class'            => 'hidden-label',
		'description'      => esc_html__( 'Choose a first (top) color for the background gradient. Leave blank to disable.', 'werkstatt' ),
		'group'            => $group_name,
		'edit_field_class' => 'vc_col-sm-6',
	);
}

function thb_vc_gradient_color2( $group_name = 'Styling' ) {
	return array(
		'type'             => 'colorpicker',
		'heading'          => esc_html__( 'Background Gradient Color 2', 'werkstatt' ),
		'param_name'       => 'bg_gradient2',
		'class'            => 'hidden-label',
		'description'      => esc_html__( 'Choose a second (bottom) color for the background gradient.', 'werkstatt' ),
		'group'            => $group_name,
		'edit_field_class' => 'vc_col-sm-6',
	);
}

function thb_vc_gradient_color3( $group_name = 'Styling' ) {
	return array(
		'type'             => 'colorpicker',
		'heading'          => esc_html__( 'Background Gradient Color 1', 'werkstatt' ),
		'param_name'       => 'bg_gradient3',
		'class'            => 'hidden-label',
		'description'      => esc_html__( 'Choose a first (top) color for the background gradient. Leave blank to disable.', 'werkstatt' ),
		'group'            => $group_name,
		'edit_field_class' => 'vc_col-sm-6',
	);
}

function thb_vc_gradient_color4( $group_name = 'Styling' ) {
	return array(
		'type'             => 'colorpicker',
		'heading'          => esc_html__( 'Background Gradient Color 2', 'werkstatt' ),
		'param_name'       => 'bg_gradient4',
		'class'            => 'hidden-label',
		'description'      => esc_html__( 'Choose a second (bottom) color for the background gradient.', 'werkstatt' ),
		'group'            => $group_name,
		'edit_field_class' => 'vc_col-sm-6',
	);
}

// Visual Composer Row Changes
vc_remove_param( 'vc_row', 'full_width' );
vc_remove_param( 'vc_row', 'gap' );
vc_remove_param( 'vc_row', 'equal_height' );
vc_remove_param( 'vc_row', 'css_animation' );
vc_remove_param( 'vc_row', 'video_bg' );
vc_remove_param( 'vc_row', 'video_bg_url' );
vc_remove_param( 'vc_row', 'video_bg_parallax' );
vc_remove_param( 'vc_row', 'parallax_speed_video' );

vc_add_param(
	'vc_row',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Row Title', 'werkstatt' ),
		'param_name'  => 'thb_row_title',
		'description' => esc_html__( 'Used if you want to use the row pagination', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Enable Full Width', 'werkstatt' ),
		'param_name'  => 'thb_full_width',
		'value'       => array(
			'Yes' => 'true',
		),
		'weight'      => 1,
		'description' => esc_html__( 'If you enable this, this row will fill the screen', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Disable Row Padding', 'werkstatt' ),
		'param_name'  => 'thb_row_padding',
		'value'       => array(
			'Yes' => 'true',
		),
		'weight'      => 1,
		'description' => esc_html__( "If you enable this, this row won't leave padding on the sides", 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Disable Column Padding', 'werkstatt' ),
		'param_name'  => 'thb_column_padding',
		'value'       => array(
			'Yes' => 'true',
		),
		'weight'      => 1,
		'description' => esc_html__( "If you enable this, the columns inside won't leave padding on the sides", 'werkstatt' ),
	)
);

vc_add_param(
	'vc_row',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Video Background', 'werkstatt' ),
		'param_name'  => 'thb_video_bg',
		'weight'      => 1,
		'description' => esc_html__( 'You can specify a video background file here (mp4). Row Background Image will be used as Poster.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Video Overlay Color', 'werkstatt' ),
		'param_name'  => 'thb_video_overlay_color',
		'weight'      => 1,
		'description' => esc_html__( 'If you want, you can select an overlay color.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Disable AutoPlay', 'werkstatt' ),
		'param_name'  => 'thb_video_play_button',
		'weight'      => 1,
		'value'       => array(
			'Yes' => 'thb_video_play_button_enabled',
		),
		'description' => esc_html__( "If enabled, the video won't start automatically and can be toggled using the Play Button Element.", 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Display Scroll to Bottom Arrow?', 'werkstatt' ),
		'param_name'  => 'thb_scroll_bottom',
		'value'       => array(
			'Yes' => 'true',
		),
		'description' => esc_html__( 'If you enable this, this will show an arrow at the bottom of the row', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Scroll to Bottom Arrow Style', 'werkstatt' ),
		'param_name'  => 'thb_scroll_bottom_style',
		'value'       => array(
			'Line'  => 'style1',
			'Mouse' => 'style2',
			'Arrow' => 'style3',
		),
		'description' => esc_html__( 'This changes the shape of the arrow', 'werkstatt' ),
		'dependency'  => array(
			'element' => 'thb_scroll_bottom',
			'value'   => array( 'true' ),
		),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Scroll to Bottom Arrow Color', 'werkstatt' ),
		'param_name'  => 'thb_scroll_bottom_color',
		'value'       => array(
			'Dark'  => 'dark',
			'Light' => 'light',
		),
		'description' => esc_html__( 'Color of the scroll to bottom arrow', 'werkstatt' ),
		'dependency'  => array(
			'element' => 'thb_scroll_bottom',
			'value'   => array( 'true' ),
		),
	)
);

vc_add_param(
	'vc_row',
	array(
		'type'        => 'dropdown',
		'class'       => '',
		'heading'     => esc_html__( 'Header Logo Color', 'werkstatt' ),
		'param_name'  => 'thb_color',
		'value'       => array(
			'Dark'  => 'dark-title',
			'Light' => 'light-title',
		),
		'std'         => 'dark-title',
		'weight'      => 1,
		'description' => esc_html__( 'This setting affects the color of the logo when header fill is deactivated or Midnight header is being used.', 'werkstatt' ),
	)
);

vc_add_param(
	'vc_row',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
		'param_name'  => 'thb_border_radius',
		'weight'      => 1,
		'description' => esc_html__( 'You can add your own border-radius code here. For ex: 2px 2px 4px 4px', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
		'param_name'  => 'box_shadow',
		'value'       => array(
			'No Shadow' => '',
			'Small'     => 'small-shadow',
			'Medium'    => 'medium-shadow',
			'Large'     => 'large-shadow',
			'X-Large'   => 'xlarge-shadow',
		),
		'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
	)
);

vc_add_param( 'vc_row', thb_vc_gradient_color1( 'Overlay' ) );
vc_add_param( 'vc_row', thb_vc_gradient_color2( 'Overlay' ) );
vc_add_param( 'vc_row', thb_vc_gradient_direction( 'Overlay' ) );

vc_add_param(
	'vc_row',
	array(
		'type'       => 'checkbox',
		'group'      => esc_html__( 'Dividers', 'werkstatt' ),
		'heading'    => esc_html__( 'Enable Dividers?', 'werkstatt' ),
		'param_name' => 'thb_shape_divider',
		'value'      => array(
			'Yes' => 'true',
		),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'thb_radio_image',
		'save_always' => true,
		'heading'     => esc_html__( 'Divider Shape', 'werkstatt' ),
		'param_name'  => 'divider_shape',
		'save_always' => true,
		'group'       => esc_html__( 'Dividers', 'werkstatt' ),
		'options'     => array(
			'curve'         => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/curve.png',
			'tilt_v2'       => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/tilt_v2.png',
			'tilt'          => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/tilt.png',
			'triangle'      => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/triangle.png',
			'triangle_v2'   => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/triangle_v2.png',
			'waves_alt'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/waves_alt.png',
			'waves_v2'      => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/waves_v2.png',
			'waves_v4'      => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/waves_v4.png',
			'waves'         => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/waves.png',
			'waves_opacity' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/waves_opacity.png',
			'cloud'         => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/cloud.png',
			'grunge'        => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/grunge.png',
			'mosaic'        => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/dividers/mosaic.png',
		),
		'dependency'  => array(
			'element' => 'thb_shape_divider',
			'value'   => array( 'true' ),
		),
	)
);

vc_add_param(
	'vc_row',
	array(
		'type'       => 'colorpicker',
		'heading'    => esc_html__( 'Divider Color', 'werkstatt' ),
		'param_name' => 'thb_divider_color',
		'group'      => esc_html__( 'Dividers', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'dropdown',
		'save_always' => true,
		'heading'     => esc_html__( 'Divider Position', 'werkstatt' ),
		'param_name'  => 'thb_divider_position',
		'group'       => esc_html__( 'Dividers', 'werkstatt' ),
		'value'       => array(
			'Bottom' => 'bottom',
			'Top'    => 'top',
		),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'textfield',
		'group'       => esc_html__( 'Dividers', 'werkstatt' ),
		'heading'     => esc_html__( 'Divider Height', 'werkstatt' ),
		'param_name'  => 'thb_divider_height',
		'description' => esc_html__( 'Enter a custom height for your shape divider in pixels without the "px"', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row',
	array(
		'type'        => 'textfield',
		'group'       => esc_html__( 'Dividers', 'werkstatt' ),
		'heading'     => esc_html__( 'Divider Mobile Height', 'werkstatt' ),
		'param_name'  => 'thb_divider_mobile_height',
		'description' => esc_html__( 'Enter a custom height for your shape divider in pixels without the "px" for mobile screens.', 'werkstatt' ),
	)
);

// Inner Row
vc_remove_param( 'vc_row_inner', 'gap' );
vc_remove_param( 'vc_row_inner', 'equal_height' );
vc_remove_param( 'vc_row_inner', 'css_animation' );

vc_add_param(
	'vc_row_inner',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Enable Max Width', 'werkstatt' ),
		'param_name'  => 'thb_max_width',
		'value'       => array(
			'Yes' => 'max_width',
		),
		'weight'      => 1,
		'description' => esc_html__( "If you enable this, the row won't exceed the max width, especially inside a full-width parent row.", 'werkstatt' ),
	)
);

vc_add_param(
	'vc_row_inner',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Disable Column Padding', 'werkstatt' ),
		'param_name'  => 'thb_column_padding',
		'value'       => array(
			'Yes' => 'true',
		),
		'weight'      => 1,
		'description' => esc_html__( "If you enable this, the columns inside won't leave padding on the sides", 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row_inner',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
		'param_name'  => 'thb_border_radius',
		'weight'      => 1,
		'description' => esc_html__( 'You can add your own border-radius code here. For ex: 2px 2px 4px 4px', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row_inner',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
		'param_name'  => 'box_shadow',
		'value'       => array(
			'No Shadow' => '',
			'Small'     => 'small-shadow',
			'Medium'    => 'medium-shadow',
			'Large'     => 'large-shadow',
			'X-Large'   => 'xlarge-shadow',
		),
		'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
	)
);

vc_add_param(
	'vc_row_inner',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Video Background', 'werkstatt' ),
		'param_name'  => 'thb_video_bg',
		'weight'      => 1,
		'description' => esc_html__( 'You can specify a video background file here (mp4). Row Background Image will be used as Poster.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_row_inner',
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Video Overlay Color', 'werkstatt' ),
		'param_name'  => 'thb_video_overlay_color',
		'weight'      => 1,
		'description' => esc_html__( 'If you want, you can select an overlay color.', 'werkstatt' ),
	)
);

// Columns
vc_remove_param( 'vc_column', 'css_animation' );
vc_add_param(
	'vc_column',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Column Content Color', 'werkstatt' ),
		'param_name'  => 'thb_color',
		'value'       => array(
			'Dark'  => 'thb-dark-column',
			'Light' => 'thb-light-column',
		),
		'weight'      => 1,
		'description' => esc_html__( 'If you white-colored contents for this column, select Light.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_column',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Enable Fixed Content', 'werkstatt' ),
		'param_name'  => 'fixed',
		'value'       => array(
			'Yes' => 'thb-fixed',
		),
		'weight'      => 1,
		'description' => esc_html__( 'If you enable this, this column will be fixed.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_column_inner',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Column Content Color', 'werkstatt' ),
		'param_name'  => 'thb_color',
		'value'       => array(
			'Dark'  => 'thb-dark-column',
			'Light' => 'thb-light-column',
		),
		'weight'      => 1,
		'description' => esc_html__( 'If you white-colored contents for this column, select Light.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_column',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
		'param_name'  => 'thb_border_radius',
		'weight'      => 1,
		'description' => esc_html__( 'You can add your own border-radius code here. For ex: 2px 2px 4px 4px', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_column_inner',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
		'param_name'  => 'thb_border_radius',
		'weight'      => 1,
		'description' => esc_html__( 'You can add your own border-radius code here. For ex: 2px 2px 4px 4px', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_column',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
		'param_name'  => 'box_shadow',
		'value'       => array(
			'No Shadow' => '',
			'Small'     => 'small-shadow',
			'Medium'    => 'medium-shadow',
			'Large'     => 'large-shadow',
			'X-Large'   => 'xlarge-shadow',
		),
		'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
	)
);
vc_add_param(
	'vc_column_inner',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
		'param_name'  => 'box_shadow',
		'value'       => array(
			'No Shadow' => '',
			'Small'     => 'small-shadow',
			'Medium'    => 'medium-shadow',
			'Large'     => 'large-shadow',
			'X-Large'   => 'xlarge-shadow',
		),
		'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
	)
);
vc_add_param( 'vc_column', $thb_animation_array );
vc_add_param( 'vc_column_inner', $thb_animation_array );

// Text Area
vc_remove_param( 'vc_column_text', 'css_animation' );
vc_add_param( 'vc_column_text', $thb_animation_array );

// Empty Space
vc_add_param(
	'vc_empty_space',
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Mobile Height', 'werkstatt' ),
		'param_name'  => 'mobile_height',
		'admin_label' => true,
		'value'       => '',
		'weight'      => 1,
		'description' => esc_html__( 'You can change the height in mobile devices', 'werkstatt' ),
	)
);

// AutoType
vc_map(
	array(
		'base'        => 'thb_autotype',
		'name'        => esc_html__( 'Auto Type', 'werkstatt' ),
		'description' => esc_html__( 'Animated text typing', 'werkstatt' ),
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'icon'        => 'thb_vc_ico_autotype',
		'class'       => 'thb_vc_sc_autotype',
		'params'      => array(
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Content', 'werkstatt' ),
				'param_name'  => 'typed_text',
				'value'       => '<h2>Unleash creativity with the powerful tools of *Werkstatt;Your Custom Content*</h2>',
				'description' => '
			Enter the content to display with typing text. <br />
			Text within <b>*</b> will be animated, for example: <strong>*Sample text*</strong>. <br />
			Text separator is <b>;</b> for example: <strong>*Werkstatt; Your Custom Content*</strong>',
				'admin_label' => true,
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Animated Text Color', 'werkstatt' ),
				'param_name'  => 'thb_animated_color',
				'description' => esc_html__( 'Uses the accent color by default', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Type Speed', 'werkstatt' ),
				'param_name'  => 'typed_speed',
				'description' => esc_html__( 'Speed of the type animation. Default is 50', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Loop?', 'werkstatt' ),
				'param_name'  => 'loop',
				'value'       => array(
					'Yes' => '1',
				),
				'description' => esc_html__( 'If enabled, the text will always animate, looping through the sentences used.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
	)
);

// Awards Parent
vc_map(
	array(
		'name'                    => esc_html__( 'Awards', 'werkstatt' ),
		'base'                    => 'thb_awards_parent',
		'icon'                    => 'thb_vc_ico_awards',
		'class'                   => 'thb_vc_sc_awards',
		'content_element'         => true,
		'category'                => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_parent'               => array( 'only' => 'thb_awards' ),
		'show_settings_on_create' => false,
		'description'             => esc_html__( 'Display Awards you have received', 'werkstatt' ),
		'js_view'                 => 'VcColumnView',
		'params'                  => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
	)
);
vc_map(
	array(
		'name'        => esc_html__( 'Single Award', 'werkstatt' ),
		'base'        => 'thb_awards',
		'icon'        => 'thb_vc_ico_awards',
		'class'       => 'thb_vc_sc_awards',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_child'    => array( 'only' => 'thb_awards_parent' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Date', 'werkstatt' ),
				'admin_label' => true,
				'param_name'  => 'date',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Name', 'werkstatt' ),
				'param_name'  => 'name',
				'admin_label' => true,
				'description' => esc_html__( 'Name of the award', 'werkstatt' ),
			),
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Description', 'werkstatt' ),
				'param_name'  => 'description',
				'description' => esc_html__( 'Award description, you can use html here.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Single Award', 'werkstatt' ),
	)
);
class WPBakeryShortCode_thb_awards_parent extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_awards extends WPBakeryShortCode {}

// Blog Posts
vc_map(
	array(
		'name'        => esc_html__( 'Blog Posts', 'werkstatt' ),
		'base'        => 'thb_post',
		'icon'        => 'thb_vc_ico_post',
		'class'       => 'thb_vc_sc_post',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Post Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your post source here', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Offset', 'werkstatt' ),
				'param_name'  => 'offset',
				'description' => esc_html__( 'You can offset your post with the number of posts entered in this setting', 'werkstatt' ),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'admin_label' => true,
				'options'     => array(
					'style1'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style1.jpg',
					'style2'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style2.jpg',
					'style3'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style3.jpg',
					'style4'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style4.jpg',
					'style5'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style5.jpg',
					'style6-alt' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style6.jpg',
					'style7'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style7.jpg',
					'style8'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style8.jpg',
					'style9'     => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style9.jpg',
					'style10'    => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style10.jpg',
					'style11'    => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style11.jpg',
					'style12'    => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/blog_styles/style12.jpg',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'admin_label' => true,
				'value'       => $thb_column_array,
				'description' => esc_html__( 'Select the layout of the posts.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'style1', 'style6-alt', 'style10', 'style12' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style-8 Columns', 'werkstatt' ),
				'param_name'  => 'style8_columns',
				'admin_label' => true,
				'value'       => array(
					'3 Columns' => '3',
					'4 Columns' => '4',
				),
				'description' => esc_html__( 'Select the layout of the posts.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'style8' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Load More Button?', 'werkstatt' ),
				'param_name'  => 'loadmore',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'Add Load More button at the bottom', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display Blog Posts from your blog', 'werkstatt' ),
	)
);

// Button shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Button', 'werkstatt' ),
		'base'        => 'thb_button',
		'icon'        => 'thb_vc_ico_button',
		'class'       => 'thb_vc_sc_button',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'description' => esc_html__( 'Enter url for link', 'werkstatt' ),
				'admin_label' => true,
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'options'     => $thb_button_style_array,
				'std'         => '',
				'description' => esc_html__( 'This changes the look of the button', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Color', 'werkstatt' ),
				'param_name'  => 'color',
				'value'       => array(
					'Black'  => '',
					'White'  => 'white',
					'Accent' => 'accent',
				),
				'description' => esc_html__( 'This changes the color of the button', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Size', 'werkstatt' ),
				'param_name'  => 'size',
				'std'         => '',
				'value'       => array(
					'Small'   => 'small',
					'Regular' => 'regular',
					'Large'   => 'large',
				),
				'description' => esc_html__( 'This changes the size of the button', 'werkstatt' ),
			),
			$thb_animation_array,
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Full Width', 'werkstatt' ),
				'param_name'  => 'full_width',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( "If enabled, this will make the button fill it's container", 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Add an animated button', 'werkstatt' ),
	)
);

vc_map(
	array(
		'name'        => esc_html__( 'Text Button', 'werkstatt' ),
		'base'        => 'thb_button_text',
		'icon'        => 'thb_vc_ico_button_text',
		'class'       => 'thb_vc_sc_button_text',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'options'     => array(
					'style1' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/text_button_styles/style1.png',
					'style2' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/text_button_styles/style2.png',
					'style3' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/text_button_styles/style3.png',
					'style4' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/text_button_styles/style4.png',
					'style5' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/text_button_styles/style5.png',
					'style6' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/text_button_styles/style6.png',
				),
				'description' => esc_html__( 'This changes the look of the button', 'werkstatt' ),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'description' => esc_html__( 'Set your url & text for your button', 'werkstatt' ),
				'admin_label' => true,
			),
			$thb_animation_array,
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Add a text button', 'werkstatt' ),
	)
);

// Cascading Images
vc_map(
	array(
		'name'                    => esc_html__( 'Cascading Images', 'werkstatt' ),
		'base'                    => 'thb_cascading_parent',
		'icon'                    => 'thb_vc_ico_cascading',
		'class'                   => 'thb_vc_sc_cascading',
		'content_element'         => true,
		'show_settings_on_create' => false,
		'category'                => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_parent'               => array( 'only' => 'thb_cascading' ),
		'description'             => esc_html__( 'Insert a cascading Image', 'werkstatt' ),
		'js_view'                 => 'VcColumnView',
	)
);

vc_map(
	array(
		'name'     => esc_html__( 'Single Image', 'werkstatt' ),
		'base'     => 'thb_cascading',
		'icon'     => 'thb_vc_ico_cascading',
		'class'    => 'thb_vc_sc_cascading',
		'category' => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_child' => array( 'only' => 'thb_cascading_parent' ),
		'params'   => array(
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Select Image', 'werkstatt' ),
				'param_name'  => 'image',
				'description' => esc_html__( 'Select Image for the layer', 'werkstatt' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Offset X', 'werkstatt' ),
				'param_name' => 'image_x',
				'value'      => $thb_offset_array,
				'std'        => '0%',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Offset Y', 'werkstatt' ),
				'param_name' => 'image_y',
				'value'      => $thb_offset_array,
				'std'        => '0%',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Max - Width', 'werkstatt' ),
				'param_name'  => 'max_width',
				'description' => esc_html__( 'The Image is set to 100% max-width by default, you can change this value or write "none".', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Retina Size?', 'werkstatt' ),
				'param_name'  => 'retina',
				'value'       => array(
					'Yes' => 'retina_size',
				),
				'description' => esc_html__( 'If selected, the image will be display half-size, so it looks crisps on retina screens. Full Width setting will override this.', 'werkstatt' ),
			),
			$thb_animation_array,
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
				'param_name'  => 'radius',
				'description' => esc_html__( 'You can add Border Radius in px value.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Box Shadow?', 'werkstatt' ),
				'param_name'  => 'thb_box_shadow',
				'value'       => array(
					'Yes' => 'thb_box_shadow',
				),
				'description' => esc_html__( 'You can add a Box Shadow to your image.', 'werkstatt' ),
			),
		),
	)
);

class WPBakeryShortCode_thb_cascading_parent extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_cascading extends WPBakeryShortCode {}

// Clients Parent
vc_map(
	array(
		'name'            => esc_html__( 'Clients', 'werkstatt' ),
		'base'            => 'thb_clients_parent',
		'icon'            => 'thb_vc_ico_clients',
		'class'           => 'thb_vc_sc_clients',
		'content_element' => true,
		'category'        => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_parent'       => array( 'only' => 'thb_clients' ),
		'params'          => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'admin_label' => true,
				'value'       => array(
					'Style 1 (Grid)'     => 'style1',
					'Style 2 (Carousel)' => 'slick',
				),
				'description' => esc_html__( 'This changes the layout style of the client logos', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'thb_columns',
				'admin_label' => true,
				'value'       => array(
					'2 Columns' => 'small-6 large-6',
					'3 Columns' => 'small-6 large-4',
					'4 Columns' => 'small-6 large-3',
					'5 Columns' => 'small-6 thb-5',
					'6 Columns' => 'small-6 medium-4 large-2',
					'8 Columns' => 'small-6 medium-3 large-1\/8',
				),
			),
			$thb_animation_array,
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Hover Effect', 'werkstatt' ),
				'param_name'  => 'thb_hover_effect',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'admin_label' => true,
				'value'       => array(
					'None'                      => '',
					'Opacity'                   => 'thb-opacity',
					'Grayscale'                 => 'thb-grayscale',
					'Opacity with Accent hover' => 'thb-opacity with-accent',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Alignment', 'werkstatt' ),
				'param_name'  => 'thb_alignment',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'value'       => array(
					'Left'   => '',
					'Center' => 'align-center',
				),
				'dependency'  => array(
					'element' => 'thb_style',
					'value'   => array( 'style1' ),
				),
				'description' => esc_html__( 'Changes the alignment of the images.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Image Borders', 'werkstatt' ),
				'param_name'  => 'thb_image_borders',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If you enable this, the logos will have border', 'werkstatt' ),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Border Color', 'werkstatt' ),
				'param_name'  => 'thb_border_color',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'admin_label' => true,
				'value'       => '#f0f0f0',
				'dependency'  => array(
					'element' => 'thb_image_borders',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Auto Play', 'werkstatt' ),
				'param_name'  => 'autoplay',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If enabled, the carousel will autoplay.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'thb_style',
					'value'   => array( 'slick' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the AutoPlay', 'werkstatt' ),
				'param_name'  => 'autoplay_speed',
				'value'       => '4000',
				'description' => esc_html__( 'Speed of the autoplay, default 4000 (4 seconds)', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'autoplay',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description'     => esc_html__( 'Partner/Client logos', 'werkstatt' ),
		'js_view'         => 'VcColumnView',
	)
);
vc_map(
	array(
		'name'        => esc_html__( 'Client', 'werkstatt' ),
		'base'        => 'thb_clients',
		'icon'        => 'thb_vc_ico_clients',
		'class'       => 'thb_vc_sc_clients',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_child'    => array( 'only' => 'thb_clients_parent' ),
		'params'      => array(
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image', 'werkstatt' ),
				'param_name'  => 'image',
				'description' => esc_html__( 'Add logo image here.', 'werkstatt' ),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'admin_label' => true,
				'description' => esc_html__( 'Add a link to client website if desired.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Single Client', 'werkstatt' ),
	)
);
class WPBakeryShortCode_thb_clients_parent extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_clients extends WPBakeryShortCode {}

// Contact Map
vc_map(
	array(
		'name'            => esc_html__( 'Contact Map Parent', 'werkstatt' ),
		'base'            => 'thb_map_parent',
		'icon'            => 'thb_vc_ico_contactmap',
		'class'           => 'thb_vc_sc_contactmap',
		'content_element' => true,
		'category'        => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_parent'       => array( 'only' => 'thb_map' ),
		'params'          => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Map Height', 'werkstatt' ),
				'param_name'  => 'height',
				'admin_label' => true,
				'value'       => 50,
				'description' => esc_html__( 'Enter height of the map in vh (0-100). For example, 50 will be 50% of viewport height and 100 will be full height. <small>Make sure you have filled in your Google Maps API inside Appearance > Theme Options.</small>', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Map Zoom', 'werkstatt' ),
				'param_name'  => 'zoom',
				'value'       => '0',
				'description' => esc_html__( 'Set map zoom level. Leave 0 to automatically fit to bounds.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Map Controls', 'werkstatt' ),
				'param_name'  => 'map_controls',
				'std'         => 'panControl, zoomControl, mapTypeControl, scaleControl',
				'value'       => array(
					__( 'Pan Control', 'werkstatt' )      => 'panControl',
					__( 'Zoom Control', 'werkstatt' )     => 'zoomControl',
					__( 'Map Type Control', 'werkstatt' ) => 'mapTypeControl',
					__( 'Scale Control', 'werkstatt' )    => 'scaleControl',
					__( 'Street View Control', 'werkstatt' ) => 'streetViewControl',
				),
				'description' => esc_html__( 'Toggle map options.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Map Type', 'werkstatt' ),
				'param_name'  => 'map_type',
				'std'         => 'roadmap',
				'value'       => array(
					__( 'Roadmap', 'werkstatt' )   => 'roadmap',
					__( 'Satellite', 'werkstatt' ) => 'satellite',
					__( 'Hybrid', 'werkstatt' )    => 'hybrid',
				),
				'description' => esc_html__( 'Choose map style.', 'werkstatt' ),
			),
			array(
				'type'        => 'textarea_raw_html',
				'heading'     => esc_html__( 'Map Style', 'werkstatt' ),
				'param_name'  => 'map_style',
				'value'       => '',
				'description' => esc_html__( 'Paste the style code here. Browse map styles in <a href="https://snazzymaps.com/" target="_blank">SnazzyMaps</a>', 'werkstatt' ),
			),
		),
		'description'     => esc_html__( 'Insert your Contact Map', 'werkstatt' ),
		'js_view'         => 'VcColumnView',
	)
);

vc_map(
	array(
		'name'     => esc_html__( 'Contact Map Location', 'werkstatt' ),
		'base'     => 'thb_map',
		'icon'     => 'thb_vc_ico_contactmap',
		'class'    => 'thb_vc_sc_contactmap',
		'category' => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_child' => array( 'only' => 'thb_map_parent' ),
		'params'   => array(
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Marker Image', 'werkstatt' ),
				'param_name'  => 'marker_image',
				'description' => esc_html__( 'Add your Custom marker image or use default one.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Retina Marker', 'werkstatt' ),
				'param_name'  => 'retina_marker',
				'value'       => array(
					__( 'Yes', 'werkstatt' ) => 'yes',
				),
				'description' => esc_html__( 'Enabling this option will reduce the size of marker for 50%, example if marker is 32x32 it will be 16x16.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Latitude', 'werkstatt' ),
				'admin_label' => true,
				'param_name'  => 'latitude',
				'description' => esc_html__( 'Enter latitude coordinate. To select map coordinates <a href="http://www.latlong.net/convert-address-to-lat-long.html" target="_blank">click here</a>.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Longitude', 'werkstatt' ),
				'admin_label' => true,
				'param_name'  => 'longitude',
				'description' => esc_html__( 'Enter longitude coordinate.', 'werkstatt' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Marker Title', 'werkstatt' ),
				'param_name' => 'marker_title',
			),
			array(
				'type'       => 'textarea',
				'heading'    => esc_html__( 'Marker Description', 'werkstatt' ),
				'param_name' => 'marker_description',
			),
		),
	)
);

class WPBakeryShortCode_thb_map_parent extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_map extends WPBakeryShortCode {}

// Counter shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Counter', 'werkstatt' ),
		'base'        => 'thb_counter',
		'icon'        => 'thb_vc_ico_counter',
		'class'       => 'thb_vc_sc_counter',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon', 'werkstatt' ),
				'param_name' => 'icon',
				'value'      => thb_getIconArray(),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Number to Count', 'werkstatt' ),
				'param_name'  => 'counter',
				'admin_label' => true,
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the counter animation', 'werkstatt' ),
				'param_name'  => 'speed',
				'value'       => '2000',
				'description' => esc_html__( 'Speed of the counter animation, default 1500', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Heading', 'werkstatt' ),
				'param_name'  => 'heading',
				'admin_label' => true,
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Counters with icons', 'werkstatt' ),
	)
);

// Experience
vc_map(
	array(
		'name'        => esc_html__( 'Experience', 'werkstatt' ),
		'base'        => 'thb_experience',
		'icon'        => 'thb_vc_ico_experience',
		'class'       => 'thb_vc_sc_experience',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Date', 'werkstatt' ),
				'admin_label' => true,
				'param_name'  => 'date',
			),
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Position & Place', 'werkstatt' ),
				'param_name'  => 'position',
				'admin_label' => true,
				'description' => esc_html__( 'You can use html here.', 'werkstatt' ),
			),
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Location or Description', 'werkstatt' ),
				'param_name'  => 'description',
				'description' => esc_html__( 'You can use html here.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Single Experience', 'werkstatt' ),
	)
);

// Fade Type
vc_map(
	array(
		'base'        => 'thb_fadetype',
		'name'        => esc_html__( 'Fade Type', 'werkstatt' ),
		'description' => esc_html__( 'Faded letter typing', 'werkstatt' ),
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'icon'        => 'thb_vc_ico_fadetype',
		'class'       => 'thb_vc_sc_fadetype',
		'params'      => array(
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Content', 'werkstatt' ),
				'param_name'  => 'fade_text',
				'value'       => '<h2>*Unleash creativity with the powerful tools of Werkstatt, Your Custom Content*</h2>',
				'description' => 'Enter the content to display with typing text. <br />
			Text within <b>*</b> will be animated, for example: <strong>*Sample text*</strong>. ',
				'admin_label' => true,
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Animation Styles', 'werkstatt' ),
				'param_name'  => 'style',
				'value'       => array(
					'Linear, from bottom'  => 'style1',
					'Randomized, from top' => 'style2',
					'Random & Scale'       => 'style3',
				),
				'std'         => 'style1',
				'description' => esc_html__( 'This changes style of the animation', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
	)
);

// Flip Box shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Flip Box', 'werkstatt' ),
		'base'        => 'thb_flipbox',
		'icon'        => 'thb_vc_ico_flipbox',
		'class'       => 'thb_vc_sc_flipbox',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon', 'werkstatt' ),
				'param_name' => 'icon_front',
				'value'      => thb_getIconArray(),
				'group'      => esc_html__( 'Front Side', 'werkstatt' ),
			),
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image As Icon', 'werkstatt' ),
				'param_name'  => 'icon_image',
				'description' => esc_html__( 'You can set an image instead of an icon.', 'werkstatt' ),
				'group'       => esc_html__( 'Front Side', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Image Width', 'werkstatt' ),
				'param_name'  => 'icon_image_width',
				'description' => esc_html__( 'If you are using an image, you can set custom width here. Default is 64 (pixels).', 'werkstatt' ),
				'group'       => esc_html__( 'Front Side', 'werkstatt' ),
			),
			array(
				'type'       => 'textarea_safe',
				'heading'    => esc_html__( 'Content', 'werkstatt' ),
				'param_name' => 'front_content',
				'group'      => esc_html__( 'Front Side', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Content Color', 'werkstatt' ),
				'param_name'  => 'front_text_color',
				'value'       => array(
					'Dark'  => 'dark',
					'Light' => 'light',
				),
				'description' => esc_html__( 'If you want white-colored contents for this side, select Light.', 'werkstatt' ),
				'group'       => esc_html__( 'Front Side', 'werkstatt' ),
			),
			array(
				'type'       => 'attach_image', // attach_images
				'heading'    => esc_html__( 'Background Image', 'werkstatt' ),
				'param_name' => 'front_bg_image',
				'group'      => esc_html__( 'Front Side', 'werkstatt' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon', 'werkstatt' ),
				'param_name' => 'icon_back',
				'value'      => thb_getIconArray(),
				'group'      => esc_html__( 'Back Side', 'werkstatt' ),
			),
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image As Icon', 'werkstatt' ),
				'param_name'  => 'icon_image_back',
				'description' => esc_html__( 'You can set an image instead of an icon.', 'werkstatt' ),
				'group'       => esc_html__( 'Back Side', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Image Width', 'werkstatt' ),
				'param_name'  => 'icon_image_back_width',
				'description' => esc_html__( 'If you are using an image, you can set custom width here. Default is 64 (pixels).', 'werkstatt' ),
				'group'       => esc_html__( 'Back Side', 'werkstatt' ),
			),
			array(
				'type'       => 'textarea_safe',
				'heading'    => esc_html__( 'Back Content', 'werkstatt' ),
				'param_name' => 'back_content',
				'group'      => esc_html__( 'Back Side', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Content Color', 'werkstatt' ),
				'param_name'  => 'back_text_color',
				'value'       => array(
					'Dark'  => 'dark',
					'Light' => 'light',
				),
				'description' => esc_html__( 'If you want white-colored contents for this side, select Light.', 'werkstatt' ),
				'group'       => esc_html__( 'Back Side', 'werkstatt' ),
			),
			array(
				'type'       => 'attach_image', // attach_images
				'heading'    => esc_html__( 'Background Image', 'werkstatt' ),
				'param_name' => 'back_bg_image',
				'group'      => esc_html__( 'Back Side', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Direction', 'werkstatt' ),
				'param_name'  => 'direction',
				'value'       => array(
					'Horizontal' => 'thb-flip-horizontal',
					'Vertical'   => 'thb-flip-vertical',
				),
				'std'         => 'thb-flip-horizontal',
				'description' => esc_html__( 'You can change the direction of the flipbox here.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Min Height', 'werkstatt' ),
				'param_name'  => 'min_height',
				'description' => esc_html__( "Please enter the minimum height you would like for you box. Enter in number of pixels - Don't enter \"px\", default is \"300\"", 'werkstatt' ),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'description' => esc_html__( 'Add a link to your flipbox.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Add a Flip Box', 'werkstatt' ),
	)
);
vc_add_param( 'thb_flipbox', thb_vc_gradient_color1( 'Front Side' ) );
vc_add_param( 'thb_flipbox', thb_vc_gradient_color2( 'Front Side' ) );
vc_add_param( 'thb_flipbox', thb_vc_gradient_color3( 'Back Side' ) );
vc_add_param( 'thb_flipbox', thb_vc_gradient_color4( 'Back Side' ) );

// Free Scroll
vc_map(
	array(
		'name'        => esc_html__( 'Free Scroll', 'werkstatt' ),
		'base'        => 'thb_freescroll',
		'icon'        => 'thb_vc_ico_freescroll',
		'class'       => 'thb_vc_sc_freescroll',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Type', 'werkstatt' ),
				'param_name'  => 'type',
				'admin_label' => true,
				'std'         => 'images',
				'value'       => array(
					'Images'     => 'images',
					'Text'       => 'text',
					'Blog Posts' => 'blog-posts',
				),
				'description' => esc_html__( 'This changes the size of the button', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Direction', 'werkstatt' ),
				'param_name'  => 'direction',
				'std'         => 'thb-right-to-left',
				'value'       => array(
					'Right to Left' => 'thb-right-to-left',
					'Left to Right' => 'thb-left-to-right',
				),
				'description' => esc_html__( 'This changes the direction of the scroll.', 'werkstatt' ),
				'group'       => esc_html__( 'Settings', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Pause on Hover', 'werkstatt' ),
				'param_name'  => 'pause_on_hover',
				'value'       => array(
					'Yes' => 'true',
				),
				'std'         => 'true',
				'description' => esc_html__( 'If enabled, the scrolling will stop on link_hover_sound', 'werkstatt' ),
				'group'       => esc_html__( 'Settings', 'werkstatt' ),
			),
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Text Content', 'werkstatt' ),
				'param_name'  => 'text_content',
				'description' => esc_html__( 'Enter text to scroll here', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'text' ),
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your post source here', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'blog-posts', 'products', 'portfolios' ),
				),
			),
			array(
				'type'       => 'attach_images', // attach_images
				'heading'    => esc_html__( 'Select Images', 'werkstatt' ),
				'param_name' => 'images',
				'dependency' => array(
					'element' => 'type',
					'value'   => array( 'images' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Use lightbox?', 'werkstatt' ),
				'param_name'  => 'lightbox',
				'value'       => array(
					'Yes' => 'mfp-gallery',
				),
				'description' => esc_html__( 'If you want to link your images to a lightbox, enable this.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'images' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
				'param_name'  => 'box_shadow',
				'value'       => array(
					'No Shadow' => '',
					'Small'     => 'small-shadow',
					'Medium'    => 'medium-shadow',
					'Large'     => 'large-shadow',
					'X-Large'   => 'xlarge-shadow',
				),
				'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'images' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'thb_columns',
				'value'       => array(
					'Single Column' => 'small-12',
					'Two Columns'   => 'small-12 medium-6',
					'Three Columns' => 'small-12 medium-4',
					'Four Columns'  => 'small-12 medium-3',
					'Five Columns'  => 'small-12 thb-5',
				),
				'description' => esc_html__( 'Select the layout.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'images', 'blog-posts', 'portfolios' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Margins between items', 'werkstatt' ),
				'param_name'  => 'thb_margins',
				'std'         => 'regular-padding',
				'value'       => array(
					'Regular' => 'regular-padding',
					'Mini'    => 'mini-padding',
					'Pixel'   => 'pixel-padding',
					'None'    => 'no-padding',
				),
				'description' => esc_html__( 'This will change the margins between items', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'images', 'blog-posts', 'portfolios' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
				'group'       => esc_html__( 'Settings', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Marquee your content', 'werkstatt' ),
	)
);

// VC Gallery
vc_remove_param( 'vc_gallery', 'type' );
vc_remove_param( 'vc_gallery', 'title' );
vc_remove_param( 'vc_gallery', 'interval' );
vc_remove_param( 'vc_gallery', 'onclick' );
vc_remove_param( 'vc_gallery', 'source' );
vc_remove_param( 'vc_gallery', 'custom_srcs' );
vc_remove_param( 'vc_gallery', 'css_animation' );
vc_remove_param( 'vc_gallery', 'custom_links' );
vc_remove_param( 'vc_gallery', 'custom_links_target' );

vc_add_param(
	'vc_gallery',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Gallery type', 'werkstatt' ),
		'param_name'  => 'gallery_type',
		'value'       => array(
			esc_html__( 'Regular Grid', 'werkstatt' ) => 'grid',
			esc_html__( 'Masonry Grid', 'werkstatt' ) => 'thb-portfolio',
		),
		'weight'      => 1,
		'description' => esc_html__( "Select gallery style. If you are using Masonry Grid, you can set individual image sizes inside 'Attachment Details > Masonry Size' when adding them to your gallery.", 'werkstatt' ),
	)
);

vc_add_param(
	'vc_gallery',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Columns', 'werkstatt' ),
		'param_name'  => 'thb_columns',
		'admin_label' => true,
		'value'       => array(
			'2 Columns' => 'small-6 large-6',
			'3 Columns' => 'small-6 large-4',
			'4 Columns' => 'small-6 large-3',
			'5 Columns' => 'small-6 thb-5',
			'6 Columns' => 'small-6 large-2',
		),
		'weight'      => 1,
		'dependency'  => array(
			'element' => 'gallery_type',
			'value'   => array( 'grid' ),
		),
	)
);

vc_add_param(
	'vc_gallery',
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Margins between items', 'werkstatt' ),
		'param_name'  => 'thb_margins',
		'group'       => 'Styling',
		'std'         => 'regular-padding',
		'value'       => array(
			'Regular' => 'regular-padding',
			'Mini'    => 'mini-padding',
			'Pixel'   => 'pixel-padding',
			'None'    => 'no-padding',
		),
		'weight'      => 1,
		'description' => esc_html__( 'This will change the margins between items', 'werkstatt' ),
	)
);

vc_add_param(
	'vc_gallery',
	array(
		'type'        => 'checkbox',
		'heading'     => esc_html__( 'Use lightbox?', 'werkstatt' ),
		'param_name'  => 'lightbox',
		'weight'      => 1,
		'value'       => array(
			'Yes' => 'mfp-gallery',
		),
		'description' => esc_html__( 'Images will link to their large versions using Lightbox.', 'werkstatt' ),
	)
);

vc_add_param( 'vc_gallery', $thb_animation_array );

// Gradient Type
vc_map(
	array(
		'base'        => 'thb_gradienttype',
		'name'        => esc_html__( 'Gradient Type', 'werkstatt' ),
		'description' => esc_html__( 'Text with Gradient Color', 'werkstatt' ),
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'icon'        => 'thb_vc_ico_gradienttype',
		'class'       => 'thb_vc_sc_gradienttype',
		'params'      => array(
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Content', 'werkstatt' ),
				'param_name'  => 'gradient_text',
				'value'       => '<h2>Enter your Custom Content Here</h2>',
				'description' => esc_html__( 'Enter the content to display with gradient.', 'werkstatt' ),
				'admin_label' => true,
			),
			$thb_animation_array,
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'heading'     => esc_html__( 'On Hover?', 'werkstatt' ),
				'description' => esc_html__( 'Enabling this will show the gradient on hover only.', 'werkstatt' ),
				'param_name'  => 'on_hover',
				'value'       => array(
					'Yes' => 'true',
				),
				'std'         => '',
			),
		),
	)
);
vc_add_param( 'thb_gradienttype', thb_vc_gradient_color1() );
vc_add_param( 'thb_gradienttype', thb_vc_gradient_color2() );

// highlighttype
vc_map(
	array(
		'base'        => 'thb_highlighttype',
		'name'        => esc_html__( 'Highlight Type', 'werkstatt' ),
		'description' => esc_html__( 'Highlight words with custom colors', 'werkstatt' ),
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'icon'        => 'thb_vc_ico_highlighttype',
		'class'       => 'thb_vc_sc_highlighttype',
		'params'      => array(
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Content', 'werkstatt' ),
				'param_name'  => 'slide_text',
				'value'       => '<h2>Werkstatt; *Most Creative* WordPress Theme</h2>',
				'description' => 'Enter the content to display with highlighted text. <br />
			Text within <b>*</b> will be highlighted, for example: <strong>*Sample text*</strong>.',
				'admin_label' => true,
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Text Color', 'werkstatt' ),
				'param_name'  => 'thb_text_color',
				'description' => esc_html__( 'Change The Text color here.', 'werkstatt' ),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Highlight Color', 'werkstatt' ),
				'param_name'  => 'thb_highlight_color',
				'description' => esc_html__( 'Change The Highlight color here.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Highlight Height', 'werkstatt' ),
				'param_name'  => 'thb_highlight_height',
				'std'         => '30',
				'description' => esc_html__( 'Height of the highlight. Default is 30, Accepted values: 0 - 100', 'werkstatt' ),
			),
			$thb_animation_array,
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Animate Highlight on Hover', 'werkstatt' ),
				'param_name' => 'thb_highlight_animation',
				'value'      => array(
					'Yes' => 'true',
				),
				'weight'     => 1,
				'std'        => 'true',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
	)
);

// Iconbox shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Iconbox', 'werkstatt' ),
		'base'        => 'thb_iconbox',
		'icon'        => 'thb_vc_ico_iconbox',
		'class'       => 'thb_vc_sc_iconbox',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Type', 'werkstatt' ),
				'param_name' => 'type',
				'value'      => array(
					'Top Icon - Style 1'   => 'top type1',
					'Top Icon - Style 2'   => 'top type2',
					'Top Icon - Style 3'   => 'top type3',
					'Top Icon - Style 4'   => 'top type4',
					'Left Icon - Style 1'  => 'left type1',
					'Right Icon - Style 1' => 'right type1',
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Alignment', 'werkstatt' ),
				'param_name' => 'alignment',
				'value'      => array(
					'Left'   => 'text-left',
					'Center' => 'text-center',
					'Right'  => 'text-right',
				),
				'std'        => 'text-center',
				'dependency' => array(
					'element' => 'type',
					'value'   => array( 'top type1' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Min Height', 'werkstatt' ),
				'param_name'  => 'height',
				'std'         => '300px',
				'description' => esc_html__( 'Please enter the minimum height you would like for this iconbox. Default is 300px. You can use other values such as 10vh, etc.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'type',
					'value'   => array( 'top type4' ),
				),
			),
			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Add Background Image', 'werkstatt' ),
				'param_name' => 'bg_image',
				'dependency' => array(
					'element' => 'type',
					'value'   => array( 'top type3' ),
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon', 'werkstatt' ),
				'param_name' => 'icon',
				'value'      => thb_getIconArray(),
			),

			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image As Icon', 'werkstatt' ),
				'param_name'  => 'icon_image',
				'description' => esc_html__( 'You can set an image instead of an icon.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Image Width', 'werkstatt' ),
				'param_name'  => 'icon_image_width',
				'description' => esc_html__( 'If you are using an image, you can set custom width here. Default is 64 (pixels).', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Animation', 'werkstatt' ),
				'param_name'  => 'animation',
				'value'       => array(
					'Yes' => 'true',
				),
				'weight'      => 1,
				'std'         => 'true',
				'description' => esc_html__( 'You can disable animation if you like.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Animation Speed', 'werkstatt' ),
				'param_name'  => 'animation_speed',
				'value'       => '1.5',
				'description' => esc_html__( 'Speed of the animation in seconds', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'animation',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'group'       => esc_html__( 'Content', 'werkstatt' ),
				'description' => esc_html__( 'Add a link to the iconbox if desired.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'group'       => esc_html__( 'Content', 'werkstatt' ),
				'heading'     => esc_html__( 'Heading', 'werkstatt' ),
				'param_name'  => 'heading',
				'admin_label' => true,
			),
			array(
				'type'       => 'textarea_safe',
				'group'      => esc_html__( 'Content', 'werkstatt' ),
				'heading'    => esc_html__( 'Content', 'werkstatt' ),
				'param_name' => 'description',
			),
			array(
				'type'       => 'colorpicker',
				'group'      => esc_html__( 'Styling', 'werkstatt' ),
				'heading'    => esc_html__( 'SVG Icon Color', 'werkstatt' ),
				'param_name' => 'thb_icon_color',
			),
			array(
				'type'        => 'colorpicker',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'heading'     => esc_html__( 'Accent Color', 'werkstatt' ),
				'param_name'  => 'thb_accent_color',
				'description' => esc_html__( 'Overrides the accent color.', 'werkstatt' ),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Heading Color', 'werkstatt' ),
				'param_name'  => 'thb_heading_color',
				'group'       => 'Styling',
				'description' => esc_html__( 'Color of the heading', 'werkstatt' ),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Text Color', 'werkstatt' ),
				'param_name'  => 'thb_text_color',
				'group'       => 'Styling',
				'description' => esc_html__( 'Color of the text', 'werkstatt' ),
			),
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Hover Image As Icon', 'werkstatt' ),
				'param_name'  => 'icon_image_hover',
				'description' => esc_html__( 'If you are using an image, you can set an hover image.', 'werkstatt' ),
				'group'       => 'Hover Styling',
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Hover Heading Color', 'werkstatt' ),
				'param_name'  => 'thb_heading_color_hover',
				'group'       => 'Hover Styling',
				'description' => esc_html__( 'Color of the heading', 'werkstatt' ),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Hover Text Color', 'werkstatt' ),
				'param_name'  => 'thb_text_color_hover',
				'group'       => 'Hover Styling',
				'description' => esc_html__( 'Color of the text', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Content Font Size', 'werkstatt' ),
				'param_name'  => 'description_font_size',
				'group'       => 'Styling',
				'description' => esc_html__( 'Enter any valid font-size: 16px, 14pt, etc.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Iconboxes with different animations', 'werkstatt' ),
	)
);

// Image shortcode
vc_map(
	array(
		'name'        => 'Image',
		'base'        => 'thb_image',
		'icon'        => 'thb_vc_ico_image',
		'class'       => 'thb_vc_sc_image wpb_vc_single_image',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'attach_image', // attach_images
				'heading'    => esc_html__( 'Select Image', 'werkstatt' ),
				'param_name' => 'image',
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Display Caption?', 'werkstatt' ),
				'param_name'  => 'caption',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If selected, the image caption will be displayed.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Caption Style', 'werkstatt' ),
				'param_name'  => 'caption_style',
				'value'       => array(
					'Style1' => 'style1',
					'Style2' => 'style2',
				),
				'description' => esc_html__( 'Select caption style.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'caption',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__( 'Text Below Image', 'werkstatt' ),
				'param_name' => 'content',
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Retina Size?', 'werkstatt' ),
				'param_name'  => 'retina',
				'value'       => array(
					'Yes' => 'retina_size',
				),
				'description' => esc_html__( 'If selected, the image will be display half-size, so it looks crisps on retina screens. Full Width setting will override this.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Ignore Lazy-Loading?', 'werkstatt' ),
				'param_name'  => 'ignore_lazyload',
				'value'       => array(
					'Yes' => 'thb-ignore-lazyload',
				),
				'std'         => 'thb-ignore-lazyload',
				'description' => esc_html__( 'If selected, lazyloading wont work on this image.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Full Width?', 'werkstatt' ),
				'param_name'  => 'full_width',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If selected, the image will always fill its container', 'werkstatt' ),
			),
			$thb_animation_array,
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Image size', 'werkstatt' ),
				'param_name'  => 'img_size',
				'description' => esc_html__( "Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use 'thumbnail' size.", 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Image alignment', 'werkstatt' ),
				'param_name'  => 'alignment',
				'value'       => array(
					'Align left'   => 'alignleft',
					'Align right'  => 'alignright',
					'Align center' => 'aligncenter',
					'Align None'   => 'alignnone',
				),
				'description' => esc_html__( 'Select image alignment.', 'werkstatt' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Link to Full-Width Image?', 'werkstatt' ),
				'param_name' => 'lightbox',
				'value'      => array(
					'Yes' => 'true',
				),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Image link', 'werkstatt' ),
				'param_name'  => 'img_link',
				'description' => esc_html__( 'Enter url if you want this image to have link.', 'werkstatt' ),
				'dependency'  => array(
					'element'  => 'lightbox',
					'is_empty' => true,
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Lightbox Gallery ID', 'werkstatt' ),
				'param_name'  => 'gallery_id',
				'description' => esc_html__( 'The images with the same Gallery ID will be grouped as a gallery', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'lightbox',
					'value'   => 'true',
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
				'param_name'  => 'thb_border_radius',
				'group'       => 'Styling',
				'description' => esc_html__( 'You can add your own border-radius code here. For ex: 2px 2px 4px 4px', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
				'param_name'  => 'box_shadow',
				'value'       => array(
					'No Shadow' => '',
					'Small'     => 'small-shadow',
					'Medium'    => 'medium-shadow',
					'Large'     => 'large-shadow',
					'X-Large'   => 'xlarge-shadow',
				),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'lightbox-style2' ),
				),
				'group'       => 'Styling',
				'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Image Max Width', 'werkstatt' ),
				'param_name'  => 'max_width',
				'value'       => array(
					'100%' => 'size_100',
					'105%' => 'size_105',
					'110%' => 'size_110',
					'115%' => 'size_115',
					'120%' => 'size_120',
					'125%' => 'size_125',
					'150%' => 'size_150',
					'175%' => 'size_175',
					'200%' => 'size_200',
					'225%' => 'size_225',
					'250%' => 'size_250',
					'275%' => 'size_275',
				),
				'std'         => 'size_100',
				'group'       => 'Styling',
				'description' => esc_html__( 'By default, image is contained within the columns, by setting this, you can extend the image over the container', 'werkstatt' ),
			),
			// array(
			// "type" => "checkbox",
			// "heading" => esc_html__( "Show Video on Hover?", 'werkstatt' ),
			// "param_name" => "video",
			// 'group'                 => esc_html__( 'Video', 'werkstatt' ),
			// "value" => array(
			// "Yes" => "true"
			// )
			// ),
			// array(
			// "type" => "textfield",
			// "heading" => esc_html__( "Video URL", 'werkstatt' ),
			// "param_name" => "video_url",
			// 'group'                 => esc_html__( 'Video', 'werkstatt' ),
			// "description" => esc_html__( "Please enter your video url here. (mp4 file)", 'werkstatt' ),
			// "dependency" => Array('element' => "video", 'value' => array('true'))
			// )
		),
		'description' => esc_html__( 'Add an animated image', 'werkstatt' ),
	)
);

// Image Slider
vc_map(
	array(
		'name'        => esc_html__( 'Image Slider', 'werkstatt' ),
		'base'        => 'thb_image_slider',
		'icon'        => 'thb_vc_ico_image_slider',
		'class'       => 'thb_vc_sc_image_slider',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'attach_images', // attach_images
				'heading'    => esc_html__( 'Select Images', 'werkstatt' ),
				'param_name' => 'images',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Image size', 'werkstatt' ),
				'param_name'  => 'img_size',
				'value'       => 'full',
				'description' => esc_html__( 'Enter image size. Example: thumbnail, medium, large, full or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "full" size. If used slides per view, this will be used to define carousel wrapper size.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'admin_label' => true,
				'value'       => array(
					'Regular'                           => 'style1',
					'Regular with Title & Captions'     => 'style4',
					'Browser View'                      => 'style2',
					'iPhone View'                       => 'style3',
					'Regular with Title & Captions - 2' => 'style5',
				),
				'description' => esc_html__( 'Title & Captions are retrieved from Image Settings. Recommended image size for iPhone view is 750x1334 pixels.', 'werkstatt' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Use lightbox?', 'werkstatt' ),
				'param_name' => 'lightbox',
				'value'      => array(
					'Yes' => 'thb_gallery',
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Show Previous/Next Slides?', 'werkstatt' ),
				'param_name' => 'thb_overflow',
				'value'      => array(
					'Yes' => 'overflow',
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Use Full Height?', 'werkstatt' ),
				'param_name' => 'thb_full_height',
				'value'      => array(
					'Yes' => 'thb_full_height',
				),
				'dependency' => array(
					'element' => 'thb_style',
					'value'   => array( 'style1' ),
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Margins between slides?', 'werkstatt' ),
				'param_name' => 'thb_margins',
				'value'      => array(
					'Yes' => 'margins',
				),
				'dependency' => array(
					'element' => 'thb_style',
					'value'   => array( 'style1' ),
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Align iPhone View', 'werkstatt' ),
				'param_name' => 'thb_align',
				'value'      => array(
					'Left'   => 'align-left',
					'Center' => 'align-center',
					'Right'  => 'align-right',
				),
				'dependency' => array(
					'element' => 'thb_style',
					'value'   => array( 'style3' ),
				),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Background Color', 'werkstatt' ),
				'param_name'  => 'thb_bg_color',
				'description' => esc_html__( 'Uses the accent color by default', 'werkstatt' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Use Pagination', 'werkstatt' ),
				'param_name' => 'thb_pagination',
				'group'      => esc_html__( 'Arrows & Pagination', 'werkstatt' ),
				'value'      => array(
					'Yes' => 'true',
				),
				'std'        => 'true',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Use Arrows', 'werkstatt' ),
				'param_name' => 'thb_navigation',
				'group'      => esc_html__( 'Arrows & Pagination', 'werkstatt' ),
				'value'      => array(
					'Yes' => 'true',
				),
				'std'        => false,
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Arrow Color', 'werkstatt' ),
				'param_name' => 'thb_arrow_color',
				'group'      => esc_html__( 'Arrows & Pagination', 'werkstatt' ),
				'value'      => array(
					'Dark'  => 'dark-arrow',
					'Light' => 'light-arrow',
				),
				'dependency' => array(
					'element' => 'thb_style',
					'value'   => array( 'style1' ),
				),
			),

			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Auto Play', 'werkstatt' ),
				'param_name'  => 'autoplay',
				'group'       => esc_html__( 'AutoPlay', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If enabled, the carousel will autoplay.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the AutoPlay', 'werkstatt' ),
				'param_name'  => 'autoplay_speed',
				'group'       => esc_html__( 'AutoPlay', 'werkstatt' ),
				'value'       => '4000',
				'description' => esc_html__( 'Speed of the autoplay, default 4000 (4 seconds)', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'autoplay',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Add Slider with your images', 'werkstatt' ),
	)
);

// Label
vc_map(
	array(
		'name'        => esc_html__( 'Label', 'werkstatt' ),
		'base'        => 'thb_label',
		'icon'        => 'thb_vc_ico_label',
		'class'       => 'thb_vc_sc_label',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'textarea_html',
				'heading'    => esc_html__( 'Content', 'werkstatt' ),
				'param_name' => 'content',
				'group'      => 'Content',
			),
			$thb_animation_array,
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
			array(
				'type'       => 'css_editor',
				'heading'    => esc_html__( 'Css', 'werkstatt' ),
				'param_name' => 'css',
				'group'      => esc_html__( 'Design options', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display a label box', 'werkstatt' ),
	)
);

// Play Button
vc_map(
	array(
		'name'                    => esc_html__( 'Play Button', 'werkstatt' ),
		'base'                    => 'thb_play',
		'icon'                    => 'thb_vc_ico_play',
		'class'                   => 'thb_vc_sc_play',
		'category'                => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'show_settings_on_create' => false,
		'description'             => esc_html__( 'For Row Video Backgrounds', 'werkstatt' ),
	)
);

// Portfolio Attributes
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Attributes', 'werkstatt' ),
		'base'        => 'thb_portfolio_attribute',
		'icon'        => 'thb_vc_ico_portfolio_attribute',
		'class'       => 'thb_vc_sc_portfolio_attribute',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'admin_label' => true,
				'value'       => array(
					'Style 1' => 'style1',
					'Style 2' => 'style2',
					'Style 3' => 'style3',
				),
				'description' => esc_html__( 'This changes the layout of the attributes', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Add your Portfolio Attributes to the page', 'werkstatt' ),
	)
);

// Portfolio Masonry
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Masonry', 'werkstatt' ),
		'base'        => 'thb_portfolio_masonry',
		'icon'        => 'thb_vc_ico_portfolio',
		'class'       => 'thb_vc_sc_portfolio',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Portfolio Style', 'werkstatt' ),
				'param_name'  => 'style',
				'save_always' => true,
				'std'         => 'style1',
				'admin_label' => true,
				'options'     => array(
					'style1' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/portfolio_style/style1.png',
					'style2' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/portfolio_style/style2.png',
				),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Layout', 'werkstatt' ),
				'param_name'  => 'masonry_layout',
				'save_always' => true,
				'std'         => 'masonry-style1',
				'options'     => array(
					'masonry-style1' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style1.png',
					'masonry-style2' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style2.png',
					'masonry-style3' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style3.png',
					'masonry-style4' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style4.png',
					'masonry-style5' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style5.png',
					'masonry-style6' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style6.png',
					'masonry-style7' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style7.png',
					'masonry-style8' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/style8.png',
					'custom'         => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/masonry_styles/custom.png',
				),
				'description' => esc_html__( 'This changes the layout of the masonry for Style 1', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'style1' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Custom Layout Grid Type', 'werkstatt' ),
				'param_name'  => 'grid_type',
				'value'       => array(
					'4 Columns' => '4',
					'3 Columns' => '3',
				),
				'std'         => '4',
				'description' => esc_html__( 'This changes the grid structure. You need to specify each item size inside their settings.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'masonry_layout',
					'value'   => array( 'custom' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'value'       => $thb_column_array,
				'description' => esc_html__( 'This changes the column counts of the Style 2', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'style2' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name'  => 'portfolio_source',
				'value'       => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
				'description' => esc_html__( 'Load More functionality only works with Advanced.', 'werkstatt' ),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Offset', 'werkstatt' ),
				'param_name'  => 'offset',
				'description' => esc_html__( 'You can offset your post with the number of posts entered in this setting', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			// Adds text field input for custom project links - modification 1
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'View Project Text', 'werkstatt' ),
				'param_name'  => 'thb_link_text',
				'admin_label' => true,
				'description' => esc_html__( 'If specified, will replace the default "View Case Study" link text', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'style1' ),
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Margins between items?', 'werkstatt' ),
				'param_name' => 'thb_margins',
				'value'      => array(
					'Yes' => 'margins',
				),
				'dependency' => array(
					'element' => 'style',
					'value'   => array( 'style1' ),
				),
				'group'      => esc_html__( 'Styling', 'werkstatt' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Add Border-Radius?', 'werkstatt' ),
				'param_name' => 'thb_border_radius',
				'value'      => array(
					'Yes' => 'thb-border-radius',
				),
				'group'      => esc_html__( 'Styling', 'werkstatt' ),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Hover Style', 'werkstatt' ),
				'param_name'  => 'hover_style',
				'options'     => $thb_portfolio_hover_style_array,
				'std'         => '',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'description' => esc_html__( 'You can change the hover styles here. Hover styles are dependent on which portfolio styles you are using so they might not work for every style.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Title Position', 'werkstatt' ),
				'param_name'  => 'title_position',
				'value'       => array(
					'Center'      => 'title-center',
					'Top Left'    => 'title-topleft',
					'Bottom Left' => 'title-bottomleft',
				),
				'description' => esc_html__( 'This changes the position of the title', 'werkstatt' ),
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'hover_style',
					'value'   => array( '', 'thb-border-hover', 'thb-push-top', 'thb-gradient-hover', 'thb-corner-hover', 'thb-image-hover', 'thb-image-blur' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Title &amp; Category Always Visible', 'werkstatt' ),
				'param_name'  => 'always_show_content',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'When enabled, the title and category wont be animated and always be visible. It will affect your hover style as well.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Animation Style', 'werkstatt' ),
				'param_name'  => 'animation_style',
				'group'       => esc_html__( 'Animation', 'werkstatt' ),
				'value'       => array(
					'Slide From Bottom' => 'thb-animate-from-bottom',
					'Fade'              => 'thb-fade',
					'Scale'             => 'thb-scale',
					'Reveal Left'       => 'thb-reveal-left',
					'No Animation'      => 'thb-none',
				),
				'description' => esc_html__( 'You can change how the portfolio elements appear on the screen.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Animation Speed', 'werkstatt' ),
				'param_name'  => 'animation_speed',
				'group'       => esc_html__( 'Animation', 'werkstatt' ),
				'value'       => array(
					'Slow'    => '0.7',
					'Regular' => '0.5',
					'Fast'    => '0.3',
					'Faster'  => '0.2',
				),
				'std'         => '0.5',
				'description' => esc_html__( 'You can change the animation speed of the filtering.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'animation_style',
					'value'   => array( 'thb-animate-from-bottom', 'thb-scale', 'thb-fade' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Filters?', 'werkstatt' ),
				'param_name'  => 'add_filters',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'This will display filters on the top', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Category Ordering', 'werkstatt' ),
				'param_name'  => 'category_order',
				'admin_label' => true,
				'value'       => array(
					'By Name'       => 'name',
					'By Post Count' => 'count',
					'By ID'         => 'term_id',
				),
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'std'         => 'name',
				'description' => esc_html__( 'This changes the ordering of categories', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Filter Style', 'werkstatt' ),
				'param_name'  => 'filter_style',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'admin_label' => true,
				'value'       => $thb_filter_array,
				'description' => esc_html__( 'This changes the style of the portfolios', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Filter Categories', 'werkstatt' ),
				'param_name'  => 'filter_categories',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'value'       => thb_portfolioCategories(),
				'description' => esc_html__( 'Select which categories you want to filter', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Load More Button?', 'werkstatt' ),
				'param_name'  => 'loadmore',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'Add Load More button at the bottom. Works only with Advanced Portfolio source.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Load More Button Style', 'werkstatt' ),
				'param_name'  => 'loadmore_style',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'options'     => $thb_button_style_array,
				'std'         => '',
				'description' => esc_html__( 'This changes the look of the button', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'loadmore',
					'value'   => array( 'true' ),
				),
			),
		),
		'description' => esc_html__( 'Display Your Portfolio in Masonry style', 'werkstatt' ),
	)
);

// Portfolio Grid
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Grid', 'werkstatt' ),
		'base'        => 'thb_portfolio_grid',
		'icon'        => 'thb_vc_ico_portfolio_grid',
		'class'       => 'thb_vc_sc_portfolio_grid',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Portfolio Style', 'werkstatt' ),
				'param_name'  => 'style',
				'save_always' => true,
				'std'         => 'style1',
				'admin_label' => true,
				'options'     => array(
					'style1' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/portfolio_style/style1.png',
					'style2' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/portfolio_style/style2.png',
				),
			),

			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'admin_label' => true,
				'value'       => $thb_column_array,
				'description' => esc_html__( 'This changes the number of columns', 'werkstatt' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Aspect Ratio', 'werkstatt' ),
				'param_name'  => 'thb_aspect',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'Images will be displayed at their original aspect ratio.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'style1' ),
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Margins between items?', 'werkstatt' ),
				'param_name' => 'thb_margins',
				'group'      => esc_html__( 'Styling', 'werkstatt' ),
				'value'      => array(
					'Yes' => 'margins',
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Add Border-Radius?', 'werkstatt' ),
				'param_name' => 'thb_border_radius',
				'group'      => esc_html__( 'Styling', 'werkstatt' ),
				'value'      => array(
					'Yes' => 'thb-border-radius',
				),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Hover Style', 'werkstatt' ),
				'param_name'  => 'hover_style',
				'options'     => $thb_portfolio_hover_style_array,
				'std'         => '',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'description' => esc_html__( 'You can change the hover styles here. Hover styles are dependent on which portfolio styles you are using so they might not work for every style.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Title Position', 'werkstatt' ),
				'param_name'  => 'title_position',
				'group'       => esc_html__( 'Styling', 'werkstatt' ),
				'value'       => array(
					'Center'      => 'title-center',
					'Top Left'    => 'title-topleft',
					'Bottom Left' => 'title-bottomleft',
				),
				'description' => esc_html__( 'This changes the position of the title', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Animation Style', 'werkstatt' ),
				'param_name'  => 'animation_style',
				'group'       => esc_html__( 'Animation', 'werkstatt' ),
				'value'       => array(
					'Slide From Bottom' => 'thb-animate-from-bottom',
					'Fade'              => 'thb-fade',
					'Scale'             => 'thb-scale',
					'No Animation'      => 'thb-none',
				),
				'description' => esc_html__( 'You can change how the portfolio elements appear on the screen.', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Animation Speed', 'werkstatt' ),
				'param_name'  => 'animation_speed',
				'group'       => esc_html__( 'Animation', 'werkstatt' ),
				'value'       => array(
					'Slow'    => '0.7',
					'Regular' => '0.5',
					'Fast'    => '0.3',
					'Faster'  => '0.2',
				),
				'std'         => '0.5',
				'description' => esc_html__( 'You can change the animation speed of the filtering.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'animation_style',
					'value'   => array( 'thb-animate-from-bottom', 'thb-scale', 'thb-fade' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Filters?', 'werkstatt' ),
				'param_name'  => 'add_filters',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'This will display filters on the top', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Category Ordering', 'werkstatt' ),
				'param_name'  => 'category_order',
				'admin_label' => true,
				'value'       => array(
					'By Name'       => 'name',
					'By Post Count' => 'count',
					'By ID'         => 'term_id',
				),
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'std'         => 'name',
				'description' => esc_html__( 'This changes the ordering of categories', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Filter Style', 'werkstatt' ),
				'param_name'  => 'filter_style',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'admin_label' => true,
				'value'       => $thb_filter_array,
				'description' => esc_html__( 'This changes the style of the portfolios', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Filter Categories', 'werkstatt' ),
				'param_name'  => 'filter_categories',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'value'       => thb_portfolioCategories(),
				'description' => esc_html__( 'Select which categories you want to filter', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Load More Button?', 'werkstatt' ),
				'param_name'  => 'loadmore',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'Add Load More button at the bottom. Works only with Advanced Portfolio source.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Load More Button Style', 'werkstatt' ),
				'param_name'  => 'loadmore_style',
				'group'       => esc_html__( 'Filters & Load More', 'werkstatt' ),
				'options'     => $thb_button_style_array,
				'std'         => '',
				'description' => esc_html__( 'This changes the look of the button', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'loadmore',
					'value'   => array( 'true' ),
				),
			),

		),
		'description' => esc_html__( 'Display Your Portfolio in a Grid Layout', 'werkstatt' ),
	)
);

// Portfolio BG Grid
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Background Grid', 'werkstatt' ),
		'base'        => 'thb_portfolio_bg_grid',
		'icon'        => 'thb_vc_ico_portfolio_bg_grid',
		'class'       => 'thb_vc_sc_portfolio_bg_grid',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'admin_label' => true,
				'value'       => $thb_column_array,
				'description' => esc_html__( 'This changes the number of columns', 'werkstatt' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Title Position', 'werkstatt' ),
				'param_name'  => 'title_position',
				'value'       => array(
					'Center'      => 'title-center',
					'Top Left'    => 'title-topleft',
					'Bottom Left' => 'title-bottomleft',
				),
				'description' => esc_html__( 'This changes the position of the title', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display Your Portfolio in a Grid Layout with Background Change', 'werkstatt' ),
	)
);

// Portfolio Carousel
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Carousel', 'werkstatt' ),
		'base'        => 'thb_portfolio_carousel',
		'icon'        => 'thb_vc_ico_portfolio_carousel',
		'class'       => 'thb_vc_sc_portfolio_carousel',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Portfolio Style', 'werkstatt' ),
				'param_name'  => 'style',
				'value'       => array(
					'Style 1' => 'style1',
					'Style 2' => 'style2',
					'Style 3' => 'carousel_style3',
				),
				'description' => esc_html__( 'Portfolio Style', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'admin_label' => true,
				'value'       => $thb_column_array,
				'description' => esc_html__( 'This changes the column count of the carousel', 'werkstatt' ),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Hover Style', 'werkstatt' ),
				'param_name' => 'hover_style',
				'value'      => array(
					'Default'          => '',
					'Show Hover Image' => 'thb-image-hover',
				),
				'dependency' => array(
					'element' => 'style',
					'value'   => array( 'style1', 'style2' ),
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Use Arrows', 'werkstatt' ),
				'param_name' => 'thb_navigation',
				'value'      => array(
					'Yes' => 'true',
				),
				'std'        => 'true',
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Auto Play', 'werkstatt' ),
				'param_name'  => 'autoplay',
				'value'       => array(
					'Yes' => '1',
				),
				'description' => esc_html__( 'If enabled, the carousel will autoplay.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the AutoPlay', 'werkstatt' ),
				'param_name'  => 'autoplay_speed',
				'value'       => '5000',
				'description' => esc_html__( 'Speed of the autoplay, default 5000 (5 seconds)', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'autoplay',
					'value'   => array( '1' ),
				),
			),

		),
		'description' => esc_html__( 'Display Your Portfolio in a Carousel Layout', 'werkstatt' ),
	)
);

// Portfolio Slider
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Slider', 'werkstatt' ),
		'base'        => 'thb_portfolio_slider',
		'icon'        => 'thb_vc_ico_portfolio_slider',
		'class'       => 'thb_vc_sc_portfolio_slider',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'slider_style',
				'save_always' => true,
				'std'         => 'slider_style1',
				'options'     => array(
					'slider_style1' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/slider_styles/style1.png',
					'slider_style2' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/slider_styles/style2.png',
					'slider_style3' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/slider_styles/style3.png',
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'thb_radio_image',
				'heading'     => esc_html__( 'Button Style', 'werkstatt' ),
				'param_name'  => 'button_style',
				'options'     => $thb_button_style_array,
				'std'         => '',
				'description' => esc_html__( 'This changes the look of the button', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'slider_style',
					'value'   => array( 'slider_style1' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Hide View Project Button?', 'werkstatt' ),
				'param_name'  => 'button_hide',
				'value'       => array(
					'Yes' => '1',
				),
				'description' => esc_html__( 'If enabled, view project link will be hidden.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Use Portfolio Sub-Titles instead of Titles?', 'werkstatt' ),
				'param_name'  => 'thb_subtitles',
				'value'       => array(
					'Yes' => 'subtitles',
				),
				'description' => esc_html__( 'If enabled, slides will show portfolio sub-titles (defined inside portfolio pages) instead of titles.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Affect Header Colors?', 'werkstatt' ),
				'param_name'  => 'thb_header_colors',
				'value'       => array(
					'Yes' => 'thb_change_header',
				),
				'description' => esc_html__( 'If enabled, slide color changes will affect the header colors as well. Recommended only if the slider is under the header at the first load of the page.', 'werkstatt' ),
			),
			// Adds text field input for custom project links - modification 2
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'View Project Text', 'werkstatt' ),
				'param_name'  => 'thb_link_text',
				'admin_label' => true,
				'description' => esc_html__( 'If specified, will replace the default "View Case Study" link text', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'slider_style',
					'value'   => array( 'slider_style3' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Auto Play', 'werkstatt' ),
				'param_name'  => 'autoplay',
				'group'       => 'Controls',
				'value'       => array(
					'Yes' => '1',
				),
				'description' => esc_html__( 'If enabled, the carousel will autoplay.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the AutoPlay', 'werkstatt' ),
				'param_name'  => 'autoplay_speed',
				'value'       => '5000',
				'group'       => 'Controls',
				'description' => esc_html__( 'Speed of the autoplay, default 5000 (5 seconds)', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'autoplay',
					'value'   => array( '1' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
				'group'       => esc_html__( 'Settings', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display Your Portfolio in a Slider Layout', 'werkstatt' ),
	)
);

// Portfolio List
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio List', 'werkstatt' ),
		'base'        => 'thb_portfolio_list',
		'icon'        => 'thb_vc_ico_portfolio_list',
		'class'       => 'thb_vc_sc_portfolio_list',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'value'       => array(
					'Dark'  => 'thb-dark',
					'Light' => 'thb-light',
				),
				'description' => esc_html__( 'This changes the color of the titles, if you have a dark background, select Light.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Use Zoom Effect?', 'werkstatt' ),
				'param_name'  => 'zoom_effect',
				'value'       => array(
					'Yes' => 'true',
				),
				'std'         => 'true',
				'description' => esc_html__( 'This will add zoom effect to the images.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display Your Portfolio in a List Layout', 'werkstatt' ),
	)
);

// Portfolio BG List
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Background List', 'werkstatt' ),
		'base'        => 'thb_portfolio_bg_list',
		'icon'        => 'thb_vc_ico_portfolio_bg_list',
		'class'       => 'thb_vc_sc_portfolio_bg_list',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'value'       => array(
					'Dark'  => 'thb-dark',
					'Light' => 'thb-light',
				),
				'description' => esc_html__( 'This changes the color of the titles, if you have a dark background, select Light.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Full Screen Images?', 'werkstatt' ),
				'param_name'  => 'full_screen_enabled',
				'value'       => array(
					'Yes' => 'full_screen_enabled',
				),
				'description' => esc_html__( 'This will make the background images full screen.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Use Zoom Effect?', 'werkstatt' ),
				'param_name'  => 'zoom_effect',
				'value'       => array(
					'Yes' => 'true',
				),
				'std'         => 'true',
				'description' => esc_html__( 'This will add zoom effect to the images.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display Your Portfolio in a List Layout with Background Change', 'werkstatt' ),
	)
);

// Portfolio Text
vc_map(
	array(
		'name'        => esc_html__( 'Portfolio Text', 'werkstatt' ),
		'base'        => 'thb_portfolio_text',
		'icon'        => 'thb_vc_ico_portfolio_text',
		'class'       => 'thb_vc_sc_portfolio_text',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Portfolio Source', 'werkstatt' ),
				'param_name' => 'portfolio_source',
				'value'      => array(
					'By ID (default)' => 'by_id',
					'Advanced'        => 'advanced',
				),
			),
			array(
				'type'        => 'loop',
				'heading'     => esc_html__( 'Advanced Portfolio Source', 'werkstatt' ),
				'param_name'  => 'source',
				'description' => esc_html__( 'Set your portfolio source here. Make sure you select portfolio post type', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'advanced' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Portfolio IDs', 'werkstatt' ),
				'param_name'  => 'portfolio_ids',
				'admin_label' => true,
				'description' => esc_html__( 'Enter the portfolio IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'portfolio_source',
					'value'   => array( 'by_id' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Filters?', 'werkstatt' ),
				'param_name'  => 'add_filters',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'This will display filters on the top', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Filter Style', 'werkstatt' ),
				'param_name'  => 'filter_style',
				'admin_label' => true,
				'value'       => $thb_filter_array,
				'description' => esc_html__( 'This changes the style of the portfolios', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Filter Categories', 'werkstatt' ),
				'param_name'  => 'filter_categories',
				'value'       => thb_portfolioCategories(),
				'description' => esc_html__( 'Select which categories you want to filter', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'add_filters',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Add Hover Previews?', 'werkstatt' ),
				'param_name'  => 'add_previews',
				'value'       => array(
					'Yes' => 'true',
				),
				'std'         => 'true',
				'description' => esc_html__( 'This will display filters on the top', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display Your Portfolio in a Text Layout', 'werkstatt' ),
	)
);

// Products
vc_map(
	array(
		'name'        => esc_html__( 'Product Grid/Carousel', 'werkstatt' ),
		'base'        => 'thb_product',
		'icon'        => 'thb_vc_ico_product',
		'class'       => 'thb_vc_sc_product',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Product Sort', 'werkstatt' ),
				'param_name'  => 'product_sort',
				'value'       => array(
					'Best Sellers'      => 'best-sellers',
					'Latest Products'   => 'latest-products',
					'Top Rated'         => 'top-rated',
					'Featured Products' => 'featured-products',
					'Sale Products'     => 'sale-products',
					'By Category'       => 'by-category',
					'By Product ID'     => 'by-id',
				),
				'description' => esc_html__( 'Select the order of the products you would like to show.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Product Category', 'werkstatt' ),
				'param_name'  => 'cat',
				'value'       => thb_product_categories(),
				'description' => esc_html__( 'Select the order of the products you would like to show.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'product_sort',
					'value'   => array( 'by-category' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Product IDs', 'werkstatt' ),
				'param_name'  => 'product_ids',
				'description' => esc_html__( 'Enter the products IDs you would like to display seperated by comma', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'product_sort',
					'value'   => array( 'by-id' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Number of Items', 'werkstatt' ),
				'param_name'  => 'item_count',
				'value'       => '4',
				'description' => esc_html__( 'The number of products to show.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'product_sort',
					'value'   => array( 'by-category', 'sale-products', 'top-rated', 'latest-products', 'best-sellers', 'featured-products' ),
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Layout', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'admin_label' => true,
				'std'         => 'thb-regular-grid',
				'value'       => array(
					'Grid'     => 'thb-regular-grid',
					'Carousel' => 'thb-carousel',
				),
				'description' => esc_html__( 'This changes the layout style of the product categories', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'admin_label' => true,
				'value'       => array(
					'1 Column'  => '1',
					'2 Columns' => '2',
					'3 Columns' => '3',
					'4 Columns' => '4',
					'5 Columns' => '5',
					'6 Columns' => '6',
				),
				'description' => esc_html__( 'Select the layout of the posts.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Pagination', 'werkstatt' ),
				'param_name' => 'thb_pagination',
				'group'      => esc_html__( 'Carousel Controls', 'werkstatt' ),
				'value'      => array(
					'Yes' => 'true',
				),
				'std'        => 'true',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Navigation Arrows', 'werkstatt' ),
				'param_name' => 'thb_navigation',
				'group'      => esc_html__( 'Carousel Controls', 'werkstatt' ),
				'value'      => array(
					'Yes' => 'true',
				),
				'std'        => 'true',
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Auto Play', 'werkstatt' ),
				'param_name'  => 'autoplay',
				'group'       => esc_html__( 'Carousel Controls', 'werkstatt' ),
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If enabled, the carousel will autoplay.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'thb_style',
					'value'   => array( 'thb-carousel' ),
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the AutoPlay', 'werkstatt' ),
				'param_name'  => 'autoplay_speed',
				'group'       => esc_html__( 'Carousel Controls', 'werkstatt' ),
				'value'       => '4000',
				'description' => esc_html__( 'Speed of the autoplay, default 4000 (4 seconds)', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'autoplay',
					'value'   => array( 'true' ),
				),
			),
		),
		'description' => esc_html__( 'Add WooCommerce products', 'werkstatt' ),
	)
);

// Progress Bar Shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Progress Bar', 'werkstatt' ),
		'base'        => 'thb_progressbar',
		'icon'        => 'thb_vc_ico_progressbar',
		'class'       => 'thb_vc_sc_progressbar',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Title', 'werkstatt' ),
				'param_name'  => 'title',
				'admin_label' => true,
				'description' => esc_html__( 'Title of this progress bar', 'werkstatt' ),
				'value'       => 'Development',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Progress', 'werkstatt' ),
				'param_name'  => 'progress',
				'admin_label' => true,
				'description' => esc_html__( 'Value for this progress. Should be between 0 and 100', 'werkstatt' ),
				'value'       => '70',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Bar Color', 'werkstatt' ),
				'param_name'       => 'thb_bar_color',
				'edit_field_class' => 'vc_col-sm-6',
				'description'      => esc_html__( 'Uses the accent color by default', 'werkstatt' ),
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Bar Color 2', 'werkstatt' ),
				'param_name'       => 'thb_bar_color_2',
				'edit_field_class' => 'vc_col-sm-6',
				'description'      => esc_html__( 'Uses the accent color by default', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display progress bars in different colors', 'werkstatt' ),
	)
);

// Share shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Share', 'werkstatt' ),
		'base'        => 'thb_share',
		'icon'        => 'thb_vc_ico_share',
		'class'       => 'thb_vc_sc_share',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'admin_label' => true,
				'std'         => 'style1',
				'value'       => array(
					'Boxed'  => 'style1',
					'Inline' => 'style2',
				),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Alignment', 'werkstatt' ),
				'param_name'  => 'thb_alignment',
				'value'       => array(
					'Left'   => 'thb-left',
					'Center' => 'thb-center',
					'Right'  => 'thb-right',
				),
				'std'         => 'thb-center',
				'description' => esc_html__( 'Alignment of the icons.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Share Text', 'werkstatt' ),
				'param_name'  => 'text',
				'admin_label' => true,
				'description' => esc_html__( 'Enter an optional title.', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Facebook', 'werkstatt' ),
				'param_name'  => 'facebook',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, Facebook share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Twitter', 'werkstatt' ),
				'param_name'  => 'twitter',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, Twitter share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Pinterest', 'werkstatt' ),
				'param_name'  => 'pinterest',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, Pinterest share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Google Plus', 'werkstatt' ),
				'param_name'  => 'google_plus',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, Google Plus share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Linkedin', 'werkstatt' ),
				'param_name'  => 'linkedin',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, Linkedin share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'VKontakte', 'werkstatt' ),
				'param_name'  => 'vkontakte',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, VKontakte share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'WhatsApp', 'werkstatt' ),
				'param_name'  => 'whatsapp',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, WhatsApp share icon will be displayed inside lightbox', 'werkstatt' ),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Facebook Messenger', 'werkstatt' ),
				'param_name'  => 'facebook_messenger',
				'value'       => array(
					'Yes' => 'true',
				),
				'group'       => esc_html__( 'Icons', 'werkstatt' ),
				'description' => esc_html__( 'If you enable this, Facebook Messenger share icon will be displayed inside lightbox', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Display a Share Button', 'werkstatt' ),
	)
);

// slidetype
vc_map(
	array(
		'base'        => 'thb_slidetype',
		'name'        => esc_html__( 'Slide Type', 'werkstatt' ),
		'description' => esc_html__( 'Animated text scrolling', 'werkstatt' ),
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'icon'        => 'thb_vc_ico_slidetype',
		'class'       => 'thb_vc_sc_slidetype',
		'params'      => array(
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Content', 'werkstatt' ),
				'param_name'  => 'slide_text',
				'value'       => '<h2>*werkstatt;Your Custom Content*</h2>',
				'description' => 'Enter the content to display with typing text. <br />
			Text within <b>*</b> will be animated, for example: <strong>*Sample text*</strong>. <br />
			Text separator is <b>;</b> for example: <strong>*werkstatt; Your Custom Content*</strong> which will create new lines at ;',
				'admin_label' => true,
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'admin_label' => true,
				'value'       => array(
					'Lines'      => 'style1',
					'Words'      => 'style2',
					'Characters' => 'style3',
				),
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Animated Text Color', 'werkstatt' ),
				'param_name'  => 'thb_animated_color',
				'description' => esc_html__( 'Uses the accent color by default', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
	)
);

// Team Member Parent
vc_map(
	array(
		'name'            => esc_html__( 'Team Members', 'werkstatt' ),
		'base'            => 'thb_team_parent',
		'icon'            => 'thb_vc_ico_team',
		'class'           => 'thb_vc_sc_team',
		'content_element' => true,
		'category'        => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_parent'       => array( 'only' => 'thb_team, thb_team_addnew' ),
		'params'          => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Layout', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'admin_label' => true,
				'value'       => array(
					'Style 1 (Grid)'     => 'style1',
					'Style 2 (Carousel)' => 'slick',
				),
				'description' => esc_html__( 'This changes the layout style of the team members', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Team Member Style', 'werkstatt' ),
				'param_name'  => 'thb_member_style',
				'value'       => array(
					'Style 1 (Text over Image)'         => 'member_style1',
					'Style 2 (Text under Image)'        => 'member_style2',
					'Style 3 (Text under Circle Image)' => 'member_style3',
				),
				'description' => esc_html__( 'This changes the style of the members', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'thb_columns',
				'admin_label' => true,
				'value'       => array(
					'2 Columns' => 'large-6',
					'3 Columns' => 'large-4',
					'4 Columns' => 'medium-4 large-3',
					'5 Columns' => 'medium-6 thb-5',
					'6 Columns' => 'medium-4 large-2',
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description'     => esc_html__( 'Team Members', 'werkstatt' ),
		'js_view'         => 'VcColumnView',
	)
);

vc_map(
	array(
		'name'        => esc_html__( 'Add Team Member Link', 'werkstatt' ),
		'base'        => 'thb_team_addnew',
		'icon'        => 'thb_vc_ico_team',
		'class'       => 'thb_vc_sc_team',
		'as_child'    => array( 'only' => 'thb_team_parent' ),
		'params'      => array(
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'description' => esc_html__( 'Link to the Contact Us Page', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Add New Team Member Link', 'werkstatt' ),
	)
);

vc_map(
	array(
		'name'        => esc_html__( 'Team Member', 'werkstatt' ),
		'base'        => 'thb_team',
		'icon'        => 'thb_vc_ico_team',
		'class'       => 'thb_vc_sc_team',
		'as_child'    => array( 'only' => 'thb_team_parent' ),
		'params'      => array(
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Image', 'werkstatt' ),
				'param_name'  => 'image',
				'description' => esc_html__( 'Add Team Member image here.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Name', 'werkstatt' ),
				'param_name'  => 'name',
				'admin_label' => true,
				'description' => esc_html__( 'Name of the member.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Sub Title', 'werkstatt' ),
				'param_name'  => 'sub_title',
				'description' => esc_html__( 'Position or title of the member.', 'werkstatt' ),
			),
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Description', 'werkstatt' ),
				'param_name'  => 'description',
				'description' => esc_html__( 'Include a small description for this member, this text area supports HTML too.', 'werkstatt' ),
			),
			array(
				'type'        => 'vc_link',
				'heading'     => esc_html__( 'Link', 'werkstatt' ),
				'param_name'  => 'link',
				'description' => esc_html__( 'If you want to link the team member to a separate page.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Single Team Member', 'werkstatt' ),
	)
);


class WPBakeryShortCode_thb_team_parent extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_team_addnew extends WPBakeryShortCode {}
class WPBakeryShortCode_thb_team extends WPBakeryShortCode {}


// Testimonial Parent
vc_map(
	array(
		'name'            => esc_html__( 'Testimonial Slider', 'werkstatt' ),
		'base'            => 'thb_testimonial_parent',
		'icon'            => 'thb_vc_ico_testimonial',
		'class'           => 'thb_vc_sc_testimonial',
		'content_element' => true,
		'category'        => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_parent'       => array( 'only' => 'thb_testimonial' ),
		'params'          => array(
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Style', 'werkstatt' ),
				'param_name'  => 'thb_style',
				'admin_label' => true,
				'value'       => array(
					'Center Aligned'           => 'style1',
					'Left Aligned'             => 'style2',
					'Center Aligned - Style 2' => 'style3',
				),
				'description' => esc_html__( 'This changes the layout style of the testimonials', 'werkstatt' ),
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Columns', 'werkstatt' ),
				'param_name'  => 'columns',
				'value'       => $thb_column_array,
				'description' => esc_html__( 'This changes the column counts of the Center Aligned - Style 2', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'thb_style',
					'value'   => array( 'style3' ),
				),
			),
			array(
				'type'        => 'checkbox',
				'heading'     => esc_html__( 'Auto Play', 'werkstatt' ),
				'param_name'  => 'autoplay',
				'value'       => array(
					'Yes' => 'true',
				),
				'description' => esc_html__( 'If enabled, the carousel will autoplay.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Speed of the AutoPlay', 'werkstatt' ),
				'param_name'  => 'autoplay_speed',
				'value'       => '4000',
				'description' => esc_html__( 'Speed of the autoplay, default 4000 (4 seconds)', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'autoplay',
					'value'   => array( 'true' ),
				),
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Display Pagination', 'werkstatt' ),
				'param_name' => 'thb_pagination',
				'value'      => array(
					'Yes' => 'true',
				),
				'std'        => 'true',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
			),
		),
		'description'     => esc_html__( 'Testimonials Slider', 'werkstatt' ),
		'js_view'         => 'VcColumnView',
	)
);
vc_map(
	array(
		'name'        => esc_html__( 'Testimonial', 'werkstatt' ),
		'base'        => 'thb_testimonial',
		'icon'        => 'thb_vc_ico_testimonial',
		'class'       => 'thb_vc_sc_testimonial',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'as_child'    => array( 'only' => 'thb_testimonial_parent' ),
		'params'      => array(
			array(
				'type'        => 'textarea',
				'heading'     => esc_html__( 'Quote', 'werkstatt' ),
				'param_name'  => 'quote',
				'description' => esc_html__( 'Quote you want to show', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Author', 'werkstatt' ),
				'param_name'  => 'author_name',
				'admin_label' => true,
				'description' => esc_html__( 'Name of the member.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Author Title', 'werkstatt' ),
				'param_name'  => 'author_title',
				'description' => esc_html__( 'Title that will appear below author name.', 'werkstatt' ),
			),
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Author Image', 'werkstatt' ),
				'param_name'  => 'author_image',
				'description' => esc_html__( 'Add Author image here.', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Single Testimonial', 'werkstatt' ),
	)
);
class WPBakeryShortCode_thb_testimonial_parent extends WPBakeryShortCodesContainer {}
class WPBakeryShortCode_thb_testimonial extends WPBakeryShortCode {}

// Twitter shortcode
vc_map(
	array(
		'name'        => esc_html__( 'Twitter', 'werkstatt' ),
		'base'        => 'thb_twitter',
		'icon'        => 'thb_vc_ico_twitter',
		'class'       => 'thb_vc_sc_twitter',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'heading'     => __( 'Style', 'werkstatt' ),
				'param_name'  => 'style',
				'value'       => array(
					esc_html__( 'Style 1 - List', 'werkstatt' ) => 'style1',
					esc_html__( 'Style 2 - Slider', 'werkstatt' ) => 'style2',
				),
				'description' => __( 'This changes the layout of tweets. Please Fill out Twitter Settings inside WerkStatt Theme Options > Misc.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Username', 'werkstatt' ),
				'param_name'  => 'username',
				'std'         => 'fuel_themes',
				'admin_label' => true,
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Number of Tweets', 'werkstatt' ),
				'param_name'  => 'count',
				'std'         => 3,
				'admin_label' => true,
			),
		),
		'description' => esc_html__( 'Display your Tweets', 'werkstatt' ),
	)
);

// Video Lightbox
vc_map(
	array(
		'name'        => esc_html__( 'Video Lightbox', 'werkstatt' ),
		'base'        => 'thb_video_lightbox',
		'icon'        => 'thb_vc_ico_video_lightbox',
		'class'       => 'thb_vc_sc_video_lightbox',
		'category'    => esc_html__( 'by Fuel Themes', 'werkstatt' ),
		'params'      => array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Style', 'werkstatt' ),
				'param_name' => 'style',
				'value'      => array(
					esc_html__( 'Just Icon', 'werkstatt' ) => 'lightbox-style1',
					esc_html__( 'With Image', 'werkstatt' ) => 'lightbox-style2',
					esc_html__( 'With Text', 'werkstatt' ) => 'lightbox-style3',
					esc_html__( 'Circular Text', 'werkstatt' ) => 'lightbox-style4',
				),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Video Link', 'werkstatt' ),
				'param_name'  => 'video',
				'admin_label' => true,
				'description' => esc_html__( 'URL of the video you want to link to. Youtube, Vimeo, etc.', 'werkstatt' ),
			),
			array(
				'type'        => 'textarea_safe',
				'heading'     => esc_html__( 'Text for the link', 'werkstatt' ),
				'param_name'  => 'video_text',
				'admin_label' => true,
				'description' => esc_html__( 'Text you want to show next to the icon', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'lightbox-style3', 'lightbox-style4' ),
				),
			),
			array(
				'type'       => 'thb_radio_image',
				'heading'    => esc_html__( 'Style', 'werkstatt' ),
				'param_name' => 'icon_style',
				'std'        => 'style1',
				'options'    => array(
					'style1' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/video_lightbox/style1.png',
					'style2' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/video_lightbox/style2.png',
					'style3' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/video_lightbox/style3.png',
					'style4' => Thb_Theme_Admin::$thb_theme_directory_uri . '/assets/img/admin/video_lightbox/style4.png',
				),
				'group'      => 'Styling',
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon Size', 'werkstatt' ),
				'param_name' => 'icon_size',
				'value'      => array(
					'Inline'  => 'inline',
					'Regular' => 'regular',
					'Large'   => 'large',
					'X-Large' => 'xlarge',
				),
				'std'        => 'regular',
				'group'      => 'Styling',
			),
			array(
				'type'        => 'colorpicker',
				'heading'     => esc_html__( 'Icon Color', 'werkstatt' ),
				'param_name'  => 'icon_color',
				'description' => esc_html__( 'Color of the Play Icon', 'werkstatt' ),
				'group'       => 'Styling',
			),
			array(
				'type'       => 'checkbox',
				'heading'    => esc_html__( 'Pulse Effect Around the icon', 'werkstatt' ),
				'param_name' => 'icon_pulse',
				'value'      => array(
					'Yes' => 'thb-icon-pulse',
				),
				'group'      => 'Styling',
			),
			array(
				'type'        => 'attach_image',
				'heading'     => esc_html__( 'Select Image', 'werkstatt' ),
				'param_name'  => 'image',
				'description' => esc_html__( 'Select image from media library.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'lightbox-style2' ),
				),
			),
			$thb_animation_array,
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Image Hover Style', 'werkstatt' ),
				'param_name' => 'hover_style',
				'value'      => array(
					'No Animation' => '',
					'Image Zoom'   => 'hover-style1',
					'Fade'         => 'hover-style2',
				),
				'dependency' => array(
					'element' => 'style',
					'value'   => array( 'lightbox-style2' ),
				),
				'group'      => 'Styling',
			),
			array(
				'type'        => 'dropdown',
				'heading'     => esc_html__( 'Box Shadow', 'werkstatt' ),
				'param_name'  => 'box_shadow',
				'value'       => array(
					'No Shadow' => '',
					'Small'     => 'small-shadow',
					'Medium'    => 'medium-shadow',
					'Large'     => 'large-shadow',
					'X-Large'   => 'xlarge-shadow',
				),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'lightbox-style2' ),
				),
				'group'       => 'Styling',
				'description' => esc_html__( 'Select from different shadow styles.', 'werkstatt' ),
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Border Radius', 'werkstatt' ),
				'param_name'  => 'border_radius',
				'description' => esc_html__( 'Set border radius of the image. Please add px,em, etc.. as well.', 'werkstatt' ),
				'dependency'  => array(
					'element' => 'style',
					'value'   => array( 'lightbox-style2' ),
				),
				'group'       => 'Styling',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Extra Class Name', 'werkstatt' ),
				'param_name'  => 'extra_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'werkstatt' ),
				'group'       => esc_html__( 'Settings', 'werkstatt' ),
			),
		),
		'description' => esc_html__( 'Play button that opens videos in a lightbox', 'werkstatt' ),
	)
);
