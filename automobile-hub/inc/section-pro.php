<?php
/**
 * Pro customizer section.
 *
 * @since  1.0.0
 * @access public
 */
class Automobile_Hub_Customize_Section_Pro extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'automobile-hub';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

			<h3 class="accordion-section-title">
				{{ data.title }}

				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

class Automobile_Hub_Button extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'wptrt-button';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $button_text = '';

	/**
	 * Custom button URL to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $button_url = '';

	/**
	 * Default priority of the section.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $priority = 999;

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function json() {

		$json       = parent::json();
		$theme      = wp_get_theme();
		$button_url = $this->button_url;

		// Fall back to the `Theme URI` defined in `style.css`.
		if ( ! $this->button_url && $theme->get( 'ThemeURI' ) ) {

			$button_url = $theme->get( 'ThemeURI' );

		// Fall back to the `Author URI` defined in `style.css`.
		} elseif ( ! $this->button_url && $theme->get( 'AuthorURI' ) ) {

			$button_url = $theme->get( 'AuthorURI' );
		}

		$json['button_text'] = $this->button_text ? $this->button_text : $theme->get( 'Name' );
		$json['button_url']  = esc_url( $button_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

			<h3 class="accordion-section-title">
				{{ data.title }}

				<# if ( data.button_text && data.button_url ) { #>
					<a href="{{ data.button_url }}" class="button button-secondary alignright" target="_blank" rel="external nofollow noopener noreferrer">{{ data.button_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}