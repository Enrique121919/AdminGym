<?php
App::uses('Clase', 'Model');

/**
 * Clase Test Case
 */
class ClaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.clase',
		'app.instructor',
		'app.curso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Clase = ClassRegistry::init('Clase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Clase);

		parent::tearDown();
	}

}
