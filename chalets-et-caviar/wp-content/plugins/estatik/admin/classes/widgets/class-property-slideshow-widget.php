<?php

/**
 * Class Es_Property_Slidehow_Widget.
 */
class Es_Property_Slideshow_Widget extends Es_Widget
{
	/**
	 * Es_Property_Slideshow_Widget constructor.
	 */
	public function __construct()
	{
		parent::__construct( 'es_property_slideshow', __( 'Estatik Slideshow', 'es-plugin' ) );
	}

	/**
	 * Return layouts of this widget.
	 *
	 * @return array
	 */
	public static function get_layouts()
	{
		return apply_filters( 'es_get_property_slideshow_widget_layouts', array( 'horizontal', 'vertical' ) );
	}

	/**
	 * Return layouts of this widget.
	 *
	 * @return array
	 */
	public static function get_slider_effects()
	{
		return apply_filters( 'es_get_property_slideshow_widget_layouts', array( 'horizontal', 'vertical' ) );
	}

	/**
	 * @return array
	 */
	public static function get_filter_fields_data()
	{
		/** @var Es_Settings_Container $es_settings */
		global $es_settings;

		$data = array();

		$taxonomies = Es_Taxonomy::get_taxonomies_list();

		if ( ! empty( $taxonomies ) ) {
			foreach ( $taxonomies as $taxonomy ) {
				if ( taxonomy_exists( $taxonomy ) ) {
					$taxonomy = get_taxonomy( $taxonomy );

					$data[ $taxonomy->label ] = get_terms( array( 'taxonomy' => $taxonomy->name, 'hide_empty' => false ) );
				}
			}
		}

		return apply_filters( 'es_get_property_slideshow_filter_fields_data', $data );
	}

	/**
	 * Function for register widget.
	 *
	 * @return void
	 */
	public static function register()
	{
		register_widget( 'Es_Property_Slideshow_Widget' );
	}

	/**
	 * @inheritdoc
	 */
	protected function get_widget_template_path()
	{
		return ES_PLUGIN_PATH . '/admin/templates/widgets/es-property-slideshow-widget.php';
	}

	/**
	 * @return string
	 */
	protected function get_widget_form_template_path()
	{
		return ES_PLUGIN_PATH . '/admin/templates/widgets/es-property-slideshow-widget-form.php';
	}
}

add_action( 'widgets_init', array( 'Es_Property_Slideshow_Widget', 'register' ) );
