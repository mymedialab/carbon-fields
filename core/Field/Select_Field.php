<?php

namespace Carbon_Fields\Field;

/**
 * Select dropdown field class.
 */
class Select_Field extends Predefined_Options_Field {
	
	/**
	 * Returns an array that holds the field data, suitable for JSON representation.
	 *
	 * @param bool $load  Should the value be loaded from the database or use the value from the current instance.
	 * @return array
	 */
	public function to_json( $load ) {
		$field_data = parent::to_json( $load );

		$field_data = array_merge( $field_data, array(
			'options' => $this->parse_options( $this->get_options() ),
		) );

		return $field_data;
	}
}
