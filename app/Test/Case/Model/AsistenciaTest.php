<?php
App::uses('Asistencia', 'Model');

/**
 * Asistencia Test Case
 */
class AsistenciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.asistencia',
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
		$this->Asistencia = ClassRegistry::init('Asistencia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Asistencia);

		parent::tearDown();
	}

}
