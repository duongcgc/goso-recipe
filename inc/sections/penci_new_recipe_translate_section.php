<?php
$options   = [];
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Jump to Recipe" text',
	'id'       => 'goso_recipe_jump_text',
	'type'     => 'authow-fw-text',
	'priority' => 7
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Print Recipe" text',
	'id'       => 'goso_recipe_print_btn_text',
	'type'     => 'authow-fw-text',
	'priority' => 7
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Pin" text',
	'id'       => 'goso_recipe_pin_text',
	'type'     => 'authow-fw-text',
	'priority' => 7
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Print" text',
	'id'       => 'goso_recipe_print_text',
	'type'     => 'authow-fw-text',
	'priority' => 7
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Serves" text',
	'id'       => 'goso_recipe_serves_text',
	'type'     => 'authow-fw-text',
	'priority' => 8
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Prep Time" text',
	'id'       => 'goso_recipe_prep_time_text',
	'type'     => 'authow-fw-text',
	'priority' => 9
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Cooking Time" text',
	'id'       => 'goso_recipe_cooking_text',
	'type'     => 'authow-fw-text',
	'priority' => 10
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Nutrition facts:" text',
	'id'       => 'goso_recipe_nutrition_text',
	'type'     => 'authow-fw-text',
	'priority' => 10
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "calories" text',
	'id'       => 'goso_recipe_calories_text',
	'type'     => 'authow-fw-text',
	'priority' => 10
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "fat" text',
	'id'       => 'goso_recipe_fat_text',
	'type'     => 'authow-fw-text',
	'priority' => 10
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "Rating:" text',
	'id'       => 'goso_recipe_rating_text',
	'type'     => 'authow-fw-text',
	'priority' => 10
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "voted" text',
	'id'       => 'goso_recipe_voted_text',
	'type'     => 'authow-fw-text',
	'priority' => 10
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "INGREDIENTS" text',
	'id'       => 'goso_recipe_ingredients_text',
	'type'     => 'authow-fw-text',
	'priority' => 11
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "INSTRUCTIONS" text',
	'id'       => 'goso_recipe_instructions_text',
	'type'     => 'authow-fw-text',
	'priority' => 12
);
$options[] = array(
	'default'  => '',
	'sanitize' => 'sanitize_text_field',
	'label'    => 'Custom "NOTES" text',
	'id'       => 'goso_recipe_notes_text',
	'type'     => 'authow-fw-text',
	'priority' => 13
);
$options[] = array(
	'default'  => 'Did You Make This Recipe?',
	'sanitize' => 'goso_recipe_html_field',
	'label'    => 'Custom "Did You Make This Recipe?" text',
	'id'       => 'goso_recipe_did_you_make',
	'type'     => 'authow-fw-text',
	'priority' => 13
);
$options[] = array(
	'default'     => 'How you went with my recipes? Tag me on Instagram at <a href="https://www.instagram.com/">@GosoDesign.</a>',
	'sanitize'    => 'goso_recipe_html_field',
	'label'       => 'Custom Description for "Did You Make This Recipe?" Section',
	'id'          => 'goso_recipe_descmake_recipe',
	'description' => 'You can use Custom HTML here',
	'type'        => 'authow-fw-textarea',
	'priority'    => 13
);

return $options;
