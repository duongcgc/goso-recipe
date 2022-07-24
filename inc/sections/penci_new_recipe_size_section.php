<?php
$options   = [];
$options[] = array(
	'default'     => '14',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Custom Font Size for Buttons "Jump to Recipe" & "Print Recipe" at the Top',
	'id'          => 'goso_recipe_btn_fsize',
	'ids'         => [ 'desktop' => 'goso_recipe_btn_fsize' ],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Recipe Title',
	'id'          => 'goso_recipe_title_fsize',
	'description' => '',
	'type'        => 'authow-fw-size',
	'ids'         => [
		'desktop' => 'goso_recipe_title_fsize',
		'mobile'  => 'goso_recipe_title_mfsize',
	],
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Recipe Title on Mobile',
	'id'          => 'goso_recipe_title_mfsize',
	'description' => '',
	'type'        => 'authow-fw-hidden',
	'priority'    => 1
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Custom Font Size for Recipe Card Data Icons',
	'id'          => 'goso_recipe_meta_ifsize',
	'ids'         => [
		'desktop' => 'goso_recipe_meta_ifsize',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'General Font Size for Recipe Card Data',
	'id'          => 'goso_recipe_meta_fsize',
	'description' => '',
	'type'        => 'authow-fw-size',
	'ids'         => [
		'desktop' => 'goso_recipe_meta_fsize',
	],
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Text: "Serves", "Prep Time", "Cooking Time" on Style 2 & 3',
	'id'          => 'goso_recipe_meta2_fsize',
	'ids'         => [
		'desktop' => 'goso_recipe_meta2_fsize',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Recipe Card Headings: "INGREDIENTS", "INSTRUCTIONS", "NOTES"',
	'id'          => 'goso_recipe_headings',
	'ids'         => [
		'desktop' => 'goso_recipe_headings',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for heading on "DID YOU MAKE THIS RECIPE?" section',
	'id'          => 'goso_recipe_makethis_head',
	'description' => '',
	'type'        => 'authow-fw-size',
	'ids'         => [
		'desktop' => 'goso_recipe_makethis_head',
	],
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for description on "DID YOU MAKE THIS RECIPE?" section',
	'id'          => 'goso_recipe_makethis_desc',
	'ids'         => [
		'desktop' => 'goso_recipe_makethis_desc',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Disable Uppercase on Recipe Card Headings: "INGREDIENTS", "INSTRUCTIONS", "NOTES"',
	'id'       => 'goso_recipe_upperheadings',
	'type'     => 'authow-fw-toggle',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Recipe Index Section Title',
	'id'          => 'goso_recipei_title',
	'ids'         => [
		'desktop' => 'goso_recipei_title',
		'mobile'  => 'goso_recipei_mtitle',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Recipe Index Section Title on Mobile',
	'id'          => 'goso_recipei_mtitle',
	'description' => '',
	'type'        => 'authow-fw-hidden',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Categories on Recipe Index',
	'id'          => 'goso_recipei_cat',
	'ids'         => [
		'desktop' => 'goso_recipei_cat',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Post Titles on Recipe Index',
	'id'          => 'goso_recipei_ptitle',
	'ids'         => [
		'desktop' => 'goso_recipei_ptitle',
		'mobile'  => 'goso_recipei_pmtitle',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
		'mobile'  => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Post Titles on Recipe Index on Mobile',
	'id'          => 'goso_recipei_pmtitle',
	'description' => '',
	'type'        => 'authow-fw-hidden',
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Font Size for Date on Recipe Index',
	'id'          => 'goso_recipei_date',
	'ids'         => [
		'desktop' => 'goso_recipei_date',
	],
	'description' => '',
	'type'        => 'authow-fw-size',
	'choices'     => array(
		'desktop' => array(
			'min'  => 1,
			'max'  => 500,
			'step' => 1,
			'edit' => true,
			'unit' => 'px',
		),
	),
);

return $options;
