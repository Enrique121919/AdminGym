<?php
App::uses('AsistenciasController', 'Controller');

/**
 * AsistenciasController Test Case
 */
class AsistenciasControllerTest extends ControllerTestCase {

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

}
