<?php
/**
 * Example class
 *
 * @package PluginTemplate
 * @subpackage ExampleNamespace
 */

namespace ExampleNamespace;

class Example_Class_Name {

	private $variable = null;

	public function __construct( $value = null ) {
		if ( $value ) {
			$this->variable = $value;
		}
	}

	public function rename_variable( $new_value ) {
		$this->variable = $new_value;
	}

	public function set_variable( $value ) {
		$this->variable = $value;
	}

	public function get_variable() {
		return $this->variable;
	}

}
