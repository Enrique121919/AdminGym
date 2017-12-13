<?php
App::uses('Inscripcion', 'Model');

/**
 * Inscripcion Test Case
 */
class InscripcionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inscripcion',
		'app.miembro',
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
		$this->Inscripcion = ClassRegistry::init('Inscripcion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inscripcion);

		parent::tearDown();
	}

}
