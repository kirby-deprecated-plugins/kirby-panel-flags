<?php
class FlagsField extends BaseField {
	static public $fieldname = 'flags';
	static public $assets = array(
		'js' => array(
			'script.js',
		),
		'css' => array(
			'style.css',
		)
	);

	public function input() {
		$filename = $this->page->content()->language();
		$filenames = c::get('plugin.flags.filenames', array(
			'en' => 'gb'
		));

		if( ! empty( (string)$filename ) ) {
			if( array_key_exists( $filename, $filenames ) ) {
				$filename = $filenames[$filename];
			}

			return tpl::load( __DIR__ . DS . 'template.php', $data = array(
				'field' => $this,
				'url' => u() . '/assets/plugins/kirby-panel-flags/icons/' . $filename . '.svg'
			));
		}
	}

	public function element() {
		$element = parent::element();
		$element->data('field', self::$fieldname);
		return $element;
	}
}