<?php
/**
 * Callback function for sanitizing checkbox settings.
 * Use for GosoDesign
 *
 * @param $input
 *
 * @return string default value if type is not exists
 */
function goso_recipe_sanitize_checkbox_field( $input ) {
	if ( $input == 1 ) {
		return true;
	}
	else {
		return false;
	}
}

if ( ! function_exists( 'goso_recipe_html_field' ) ) {
	function goso_recipe_html_field( $input ) {
		return $input;
	}
}

/**
 * Customize colors
 * @since 3.0
 */
function goso_recipe_customizer_css() {
	?>
	<style type="text/css">
		<?php if(get_theme_mod( 'goso_recipe_ratio_fimage' )) : ?>.precipe-style-2 .goso-recipe-thumb{ padding-bottom:<?php echo get_theme_mod( 'goso_recipe_ratio_fimage' ); ?>%; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_color_accent' )) : ?>.goso-recipe-tagged .prt-icon span, .goso-recipe-action-buttons .goso-recipe-button:hover{ background-color:<?php echo get_theme_mod( 'goso_color_accent' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_btn_fsize' )) : ?>.goso-recipe-action-buttons .goso-recipe-button{ font-size:<?php echo get_theme_mod( 'goso_recipe_btn_fsize' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_title_fsize' )) : ?>.post-entry .goso-recipe-heading .recipe-title-nooverlay, .post-entry .goso-recipe-heading .recipe-title-overlay{ font-size:<?php echo get_theme_mod( 'goso_recipe_title_fsize' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_title_mfsize' )) : ?>@media only screen and (max-width: 479px){.post-entry .goso-recipe-heading .recipe-title-nooverlay, .post-entry .goso-recipe-heading .recipe-title-overlay{ font-size:<?php echo get_theme_mod( 'goso_recipe_title_mfsize' ); ?>px; } }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_fsize' )) : ?>.goso-recipe-heading .goso-recipe-meta, .goso-recipe-rating{ font-size:<?php echo get_theme_mod( 'goso_recipe_meta_fsize' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_ifsize' )) : ?>.precipe-style-2 .goso-recipe-heading .goso-recipe-meta span i, .precipe-style-2 .goso-ficon.ficon-fire, .goso-recipe-heading .goso-recipe-meta span i, .goso-ficon.ficon-fire{ font-size:<?php echo get_theme_mod( 'goso_recipe_meta_ifsize' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta2_fsize' )) : ?>.precipe-style-2 .goso-recipe-heading .goso-recipe-meta span.remeta-item{ font-size:<?php echo get_theme_mod( 'goso_recipe_meta2_fsize' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_headings' )) : ?>.post-entry .goso-recipe-title{ font-size:<?php echo get_theme_mod( 'goso_recipe_headings' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_head' )) : ?>.goso-recipe-tagged .prt-span-heading{ font-size:<?php echo get_theme_mod( 'goso_recipe_makethis_head' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_desc' )) : ?>.goso-recipe-tagged .prt-span-des, .goso-recipe-tagged .prt-span-des *{ font-size:<?php echo get_theme_mod( 'goso_recipe_makethis_desc' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_upperheadings' )) : ?>.post-entry .goso-recipe-title{ text-transform:none; letter-spacing: 0; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipei_title' )) : ?>.goso-recipe-index-wrap h4.recipe-index-heading{ font-size:<?php echo get_theme_mod( 'goso_recipei_title' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipei_mtitle' )) : ?>@media only screen and (max-width: 479px){.goso-recipe-index-wrap h4.recipe-index-heading{ font-size:<?php echo get_theme_mod( 'goso_recipei_mtitle' ); ?>px; } }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipei_cat' )) : ?>.goso-recipe-index .cat > a.goso-cat-name{ font-size:<?php echo get_theme_mod( 'goso_recipei_cat' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipei_ptitle' )) : ?>.goso-recipe-index-wrap .goso-recipe-index-title a{ font-size:<?php echo get_theme_mod( 'goso_recipei_ptitle' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipei_pmtitle' )) : ?>@media only screen and (max-width: 479px){.goso-recipe-index-wrap .goso-recipe-index-title a{ font-size:<?php echo get_theme_mod( 'goso_recipei_pmtitle' ); ?>px; } }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipei_date' )) : ?>.goso-recipe-index .date{ font-size:<?php echo get_theme_mod( 'goso_recipei_date' ); ?>px; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_btn_bg' )) : ?>.goso-recipe-action-buttons .goso-recipe-button{ background-color:<?php echo get_theme_mod( 'goso_recipe_btn_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_btn_color' )) : ?>.goso-recipe-action-buttons .goso-recipe-button{ color:<?php echo get_theme_mod( 'goso_recipe_btn_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_btn_hbg' )) : ?>.goso-recipe-action-buttons .goso-recipe-button:hover{ background-color:<?php echo get_theme_mod( 'goso_recipe_btn_hbg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_btn_hcolor' )) : ?>.goso-recipe-action-buttons .goso-recipe-button:hover{ color:<?php echo get_theme_mod( 'goso_recipe_btn_hcolor' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_border_color' )) : ?>.wrapper-goso-recipe .goso-recipe, .wrapper-goso-recipe .goso-recipe-heading, .wrapper-goso-recipe .goso-recipe-ingredients, .wrapper-goso-recipe .goso-recipe-notes { border-color:<?php echo get_theme_mod( 'goso_recipe_border_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_border_4color' )) : ?>.precipe-style-4, .precipe-style-4 .goso-recipe-thumb .recipe-thumb-top{ border-color:<?php echo get_theme_mod( 'goso_recipe_border_4color' ); ?> !important; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_title_color' )) : ?>.post-entry .goso-recipe-heading .recipe-title-nooverlay { color:<?php echo get_theme_mod( 'goso_recipe_title_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_title_ocolor' )) : ?>.post-entry .precipe-style-4 .goso-recipe-heading .recipe-title-nooverlay, .post-entry .goso-recipe-heading .recipe-title-overlay{ color:<?php echo get_theme_mod( 'goso_recipe_title_ocolor' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_header4bg' )) : ?>.precipe-style-4 .goso-recipe-heading{ background-color:<?php echo get_theme_mod( 'goso_recipe_header4bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_print_button' )) : ?>.post-entry .goso-recipe-heading a.goso-recipe-print { color:<?php echo get_theme_mod( 'goso_recipe_print_button' ); ?>; } .post-entry .goso-recipe-heading a.goso-recipe-print { border-color:<?php echo get_theme_mod( 'goso_recipe_print_button' ); ?>; } .post-entry .goso-recipe-heading a.goso-recipe-print:hover, .wrapper-buttons-style4 .goso-recipe-print-btn, .wrapper-buttons-overlay .goso-recipe-print-btn { background-color:<?php echo get_theme_mod( 'goso_recipe_print_button' ); ?>; border-color:<?php echo get_theme_mod( 'goso_recipe_print_button' ); ?>; } .post-entry .goso-recipe-heading a.goso-recipe-print:hover { color:#fff; }.wrapper-buttons-overlay .goso-recipe-print-btn{ -webkit-box-shadow: 0 5px 20px <?php echo get_theme_mod( 'goso_recipe_print_button' ); ?>; box-shadow: 0 5px 20px <?php echo get_theme_mod( 'goso_recipe_print_button' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_icon_color' )) : ?>.goso-recipe-heading .goso-recipe-meta span i, .goso-ficon.ficon-fire { color:<?php echo get_theme_mod( 'goso_recipe_meta_icon_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_border4' )) : ?>.post-entry .precipe-style-4 .goso-recipe-heading .recipe-title-nooverlay:after { background-color:<?php echo get_theme_mod( 'goso_recipe_meta_border4' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_icon_4color' )) : ?>.precipe-style-4 .goso-recipe-heading .goso-recipe-meta span i, .precipe-style-4 .goso-ficon.ficon-fire { color:<?php echo get_theme_mod( 'goso_recipe_meta_icon_4color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_color' )) : ?>.goso-recipe-heading .goso-recipe-meta, .goso-recipe-rating{ color:<?php echo get_theme_mod( 'goso_recipe_meta_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_4color' )) : ?>.precipe-style-4 .goso-recipe-heading .goso-recipe-meta, .precipe-style-4 .goso-recipe-rating{ color:<?php echo get_theme_mod( 'goso_recipe_meta_4color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_2color' )) : ?>.precipe-style-2 .goso-recipe-heading .goso-recipe-meta span.remeta-item{ color:<?php echo get_theme_mod( 'goso_recipe_meta_2color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_meta_bcolor' )) : ?>.precipe-style-2 .goso-recipe-heading .goso-recipe-meta, .precipe-style-2 .goso-recipe-heading .goso-recipe-meta > span{ border-color:<?php echo get_theme_mod( 'goso_recipe_meta_bcolor' ); ?>; }@media only screen and (max-width: 767px){ .precipe-style-2 .goso-recipe-heading .goso-recipe-meta > span:nth-of-type(1), .precipe-style-2 .goso-recipe-heading .goso-recipe-meta > span:nth-of-type(2){ border-color:<?php echo get_theme_mod( 'goso_recipe_meta_bcolor' ); ?>; } }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_section_title_color' )) : ?>.post-entry .goso-recipe-title { color:<?php echo get_theme_mod( 'goso_recipe_section_title_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_note_title_color' )) : ?>.post-entry .goso-recipe-notes .goso-recipe-title { color:<?php echo get_theme_mod( 'goso_recipe_note_title_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_note_color' )) : ?>.post-entry .goso-recipe-notes, .post-entry .goso-recipe-notes p { color:<?php echo get_theme_mod( 'goso_recipe_note_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_bg' )) : ?>.goso-recipe-tagged { background-color:<?php echo get_theme_mod( 'goso_recipe_makethis_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_inbg' )) : ?>.goso-recipe-tagged .prt-icon span { background-color:<?php echo get_theme_mod( 'goso_recipe_makethis_inbg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_in' )) : ?>.goso-recipe-tagged .prt-icon span { color:<?php echo get_theme_mod( 'goso_recipe_makethis_in' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_chead' )) : ?>.goso-recipe-tagged .prt-span-heading{ color:<?php echo get_theme_mod( 'goso_recipe_makethis_chead' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_makethis_cdesc' )) : ?>.goso-recipe-tagged .prt-span-des, .goso-recipe-tagged .prt-span-des * { color:<?php echo get_theme_mod( 'goso_recipe_makethis_cdesc' ); ?> !important; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_index_title_color' )) : ?>.goso-recipe-index-wrap h4.recipe-index-heading { color:<?php echo get_theme_mod( 'goso_recipe_index_title_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_index_cat_color' )) : ?>.goso-recipe-index .cat > a.goso-cat-name { color:<?php echo get_theme_mod( 'goso_recipe_index_cat_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_index_post_title_color' )) : ?>.goso-recipe-index-wrap .goso-recipe-index-title a { color:<?php echo get_theme_mod( 'goso_recipe_index_post_title_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_index_post_date_color' )) : ?>.goso-recipe-index .date { color:<?php echo get_theme_mod( 'goso_recipe_index_post_date_color' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_index_button_bg' )) : ?>.goso-recipe-index-wrap .goso-index-more-link a { background-color:<?php echo get_theme_mod( 'goso_recipe_index_button_bg' ); ?>; }<?php endif; ?>
		<?php if(get_theme_mod( 'goso_recipe_index_button_color' )) : ?>.goso-recipe-index-wrap .goso-index-more-link a { color:<?php echo get_theme_mod( 'goso_recipe_index_button_color' ); ?>; }<?php endif; ?>
	</style>
	<?php
}
add_action( 'wp_head', 'goso_recipe_customizer_css', 15 );
