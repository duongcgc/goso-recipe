<?php
/**
 * @author : GosoDesign
 */

namespace AuthowFW\Customizer;

/**
 * Class Theme Authow Customizer
 */
class RecipeOption extends CustomizerOptionAbstract {

	public $panelID = 'goso_recipe_panel';

	public function set_option() {
		$this->set_panel();
		$this->set_section();
	}

	public function set_panel() {
		$this->customizer->add_panel( [
			'id'       => $this->panelID,
			'title'    => esc_html__( 'Recipe Options', 'authow' ),
			'priority' => $this->id,
		] );
	}

	public function set_section() {
		$this->add_lazy_section( 'goso_new_section_recipe_section', esc_html__( 'General Options', 'authow' ), $this->panelID );
		$this->add_lazy_section( 'goso_new_recipe_schema_section', esc_html__( 'Default Schema Data', 'authow' ), $this->panelID, __( 'Because Google will validate your recipes to make it display good on search results. So, you should set a default value for all default fileds below to make Google validate your recipe bestest. If you want to modify any default field, let go to edit your posts and change recipe data there.', 'authow' ) );
		$this->add_lazy_section( 'goso_new_recipe_size_section', esc_html__( 'Font Size', 'authow' ), $this->panelID );
		$this->add_lazy_section( 'goso_new_recipe_typo_section', esc_html__( 'Colors', 'authow' ), $this->panelID );
		$this->add_lazy_section( 'goso_new_recipe_translate_section', esc_html__( 'Text Translation', 'authow' ), $this->panelID );
	}
}
