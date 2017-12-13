<?php
App::uses('Miembro', 'Model');

/**
 * Miembro Test Case
 */
class MiembroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.miembro',
		'app.curso',
		'app.clase',
		'app.instructor',
		'app.inscripcion',
		'app.paquete',
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
		$this->Miembro = ClassRegistry::init('Miembro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Miembro);

		parent::tearDown();
	}

}
