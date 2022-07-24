<?php
$options   = [];
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Custom Background Color for Buttons "Jump to Recipe" & "Print Recipe" at the Top',
	'id'       => 'goso_recipe_btn_bg',
	'priority' => 2
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Custom Text Color for Buttons "Jump to Recipe" & "Print Recipe" at the Top',
	'id'       => 'goso_recipe_btn_color',
	'priority' => 2
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Custom Hover Background Color for Buttons "Jump to Recipe" & "Print Recipe" at the Top',
	'id'       => 'goso_recipe_btn_hbg',
	'priority' => 2
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Custom Hover Text Color for Buttons "Jump to Recipe" & "Print Recipe" at the Top',
	'id'       => 'goso_recipe_btn_hcolor',
	'priority' => 2
);
$options[] = array(
	'default'  => '#dedede',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Border Color',
	'id'       => 'goso_recipe_border_color',
	'priority' => 2
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Border Color for Style 4',
	'id'       => 'goso_recipe_border_4color',
	'priority' => 2
);
$options[] = array(
	'default'  => '#313131',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Title Color',
	'id'       => 'goso_recipe_title_color',
	'priority' => 3
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Title Color for Style 4 & Overlay Recipe Image',
	'id'       => 'goso_recipe_title_ocolor',
	'priority' => 3
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Header Section Background for Style 4',
	'id'       => 'goso_recipe_header4bg',
	'priority' => 3
);
$options[] = array(
	'default'  => '#6eb48c',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Print Button Accent Color',
	'id'       => 'goso_recipe_print_button',
	'priority' => 3
);
$options[] = array(
	'default'  => '#aaaaaa',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Border Color after Title on Style 4',
	'id'       => 'goso_recipe_meta_border4',
	'priority' => 4
);
$options[] = array(
	'default'  => '#aaaaaa',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Meta Icons Color',
	'id'       => 'goso_recipe_meta_icon_color',
	'priority' => 4
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Meta Icons Color for Style 4',
	'id'       => 'goso_recipe_meta_icon_4color',
	'priority' => 4
);
$options[] = array(
	'default'  => '#888888',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Meta Text Color',
	'id'       => 'goso_recipe_meta_color',
	'priority' => 4
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Meta Text Color for Style 4',
	'id'       => 'goso_recipe_meta_4color',
	'priority' => 4
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Custom Color for Text "Serves", "Prep Time", "Cooking Time" on Style 2 & 3',
	'id'       => 'goso_recipe_meta_2color',
	'priority' => 4
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Meta Border Color for Style 2 & 3',
	'id'       => 'goso_recipe_meta_bcolor',
	'priority' => 4
);
$options[] = array(
	'default'  => '#888888',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Section Title Color',
	'id'       => 'goso_recipe_section_title_color',
	'priority' => 5
);
$options[] = array(
	'default'  => '#888888',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Notes Title Color',
	'id'       => 'goso_recipe_note_title_color',
	'priority' => 5
);
$options[] = array(
	'default'  => '#313131',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Notes Text Color',
	'id'       => 'goso_recipe_note_color',
	'priority' => 6
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe "DID YOU MAKE THIS RECIPE?" Section Background Color',
	'id'       => 'goso_recipe_makethis_bg',
	'priority' => 6
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe "DID YOU MAKE THIS RECIPE?" Instagram Icon Background Color',
	'id'       => 'goso_recipe_makethis_inbg',
	'priority' => 6
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe "DID YOU MAKE THIS RECIPE?" Instagram Icon Color',
	'id'       => 'goso_recipe_makethis_in',
	'priority' => 6
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe "DID YOU MAKE THIS RECIPE?" Heading Text Color',
	'id'       => 'goso_recipe_makethis_chead',
	'priority' => 6
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe "DID YOU MAKE THIS RECIPE?" Description Color',
	'id'       => 'goso_recipe_makethis_cdesc',
	'priority' => 6
);
$options[] = array(
	'default'  => '#777777',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Index Section Title Color',
	'id'       => 'goso_recipe_index_title_color',
	'priority' => 6
);
$options[] = array(
	'default'  => '#6eb48c',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Index Posts Categories Color',
	'id'       => 'goso_recipe_index_cat_color',
	'priority' => 6
);
$options[] = array(
	'default'  => '#313131',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Index Posts Title Color',
	'id'       => 'goso_recipe_index_post_title_color',
	'priority' => 6
);
$options[] = array(
	'default'  => '#888888',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Index Posts Date Color',
	'id'       => 'goso_recipe_index_post_date_color',
	'priority' => 6
);
$options[] = array(
	'default'  => '#313131',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Index Button View All Background Color',
	'id'       => 'goso_recipe_index_button_bg',
	'priority' => 6
);
$options[] = array(
	'default'  => '#ffffff',
	'sanitize' => 'sanitize_hex_color',
	'type'     => 'authow-fw-color',
	'label'    => 'Recipe Index Button View All Text Color',
	'id'       => 'goso_recipe_index_button_color',
	'priority' => 6
);

return $options;
