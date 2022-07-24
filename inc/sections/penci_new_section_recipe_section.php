<?php
$options   = [];
$options[] = array(
	'default'  => 'style-1',
	'label'    => 'Recipe Card Layout',
	'id'       => 'goso_recipe_layout',
	'type'     => 'authow-fw-select',
	'priority' => 1,
	'choices'  => array(
		'style-1' => 'Style 1',
		'style-2' => 'Style 2',
		'style-3' => 'Style 3',
		'style-4' => 'Style 4',
	)
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Hide Featured Image on Recipe Card',
	'id'       => 'goso_recipe_featured_image',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Show "Jump to Recipe" button at the top of post',
	'id'       => 'goso_recipe_jump_button',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Show "Print Recipe" button at the top of post',
	'id'       => 'goso_recipe_print_btn',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => 'align-center',
	'label'    => 'Align for "Jump to Recipe" & "Print Recipe" at The Top',
	'id'       => 'goso_recipe_btn_align',
	'type'     => 'authow-fw-select',
	'priority' => 1,
	'choices'  => array(
		'align-center' => esc_html__( 'Center', 'authow' ),
		'align-left'   => esc_html__( 'Left', 'authow' ),
		'align-right'  => esc_html__( 'Right', 'authow' ),
	)
);
$options[] = array(
	'default'     => '',
	'sanitize'    => 'sanitize_text_field',
	'label'       => 'Custom Ratio Width/Height of Recipe Image for Style 2 & 3. E.g: W/H = 50%, fill 50 below',
	'id'          => 'goso_recipe_ratio_fimage',
	'description' => '',
	'type'        => 'authow-fw-text',
	'priority'    => 1
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'goso_recipe_sanitize_checkbox_field',
	'label'       => 'Display Recipe Card Title Overlay on Featured Image',
	'id'          => 'goso_recipe_title_overlay',
	'description' => 'This option apply for Recipe Style 2 & Style 3 only',
	'type'        => 'authow-fw-toggle',
	'priority'    => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Hide Print Button',
	'id'       => 'goso_recipe_print',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Show Pin Button',
	'id'       => 'goso_recipe_pinterest',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Hide Images on Recipe Igredients & Instructions When Users Print Recipe',
	'id'       => 'goso_recipe_hide_image_print',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Show Nutrition Facts',
	'id'       => 'goso_recipe_nutrition',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'     => false,
	'sanitize'    => 'goso_recipe_sanitize_checkbox_field',
	'label'       => 'Completely Remove Nutrition Facts on Google Search Results',
	'id'          => 'goso_recipe_remove_nutrition',
	'description' => esc_html__( 'If you remove Nutrition Facts - you can get warning missing it for all your recipe cards in google search console. And we do not recommend you do that.', 'authow' ),
	'type'        => 'authow-fw-toggle',
	'priority'    => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Hide Calories',
	'id'       => 'goso_recipe_calories',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Hide Fat',
	'id'       => 'goso_recipe_fat',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Hide Rating',
	'id'       => 'goso_recipe_rating',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);

$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Make Ingredients is Visual Editor on Edit Recipe Screen',
	'id'       => 'goso_recipe_ingredients_visual',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Make Notes is Visual Editor on Edit Recipe Screen',
	'id'       => 'goso_recipe_notes_visual',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);
$options[] = array(
	'default'  => false,
	'sanitize' => 'goso_recipe_sanitize_checkbox_field',
	'label'    => 'Show "Did You Make This Recipe?" Section At The Bottom',
	'id'       => 'goso_recipe_make_trecipe',
	'type'     => 'authow-fw-toggle',
	'priority' => 1
);

return $options;
