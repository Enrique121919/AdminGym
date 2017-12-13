<?php
App::uses('Paquete', 'Model');

/**
 * Paquete Test Case
 */
class PaqueteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paquete',
		'app.inscripcion',
		'app.miembro',
		'app.curso',
		'app.clase',
		'app.instructor',
		'app.empleado',
		'app.tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paquete = ClassRegistry::init('Paquete');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paquete);

		parent::tearDown();
	}

}
