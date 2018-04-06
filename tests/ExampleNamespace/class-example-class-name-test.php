<?php

namespace ExampleNamespace;

use PHPUnit\Framework\TestCase;

class Example_Class_Name_Test extends TestCase {

	/**
	 * @var Example_Class_Name Class $obj instance
	 */
	private $obj;

	public function setUp() {
		$this->obj = new Example_Class_Name();
	}

	public function tearDown() {
		unset( $this->obj );
	}

	public function test_rename_variable_method() {
		$some_value = 'String example';
		$this->obj->rename_variable( $some_value );
		self::assertSame( $some_value, $this->obj->get_variable() );
	}

	public function test_always_fail() {
		$this->fail( 'This test always fails' );
	}
}
