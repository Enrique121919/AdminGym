<?php
/**
 * Inscripcion Fixture
 */
class InscripcionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'miembro_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'paquete_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'fecha' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'miembro_id', 'paquete_id', 'empleado_id'), 'unique' => 1),
			'fk_inscripciones_miembros1_idx' => array('column' => 'miembro_id', 'unique' => 0),
			'fk_inscripciones_paquetes1_idx' => array('column' => 'paquete_id', 'unique' => 0),
			'fk_inscripciones_empleados1_idx' => array('column' => 'empleado_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'miembro_id' => 1,
			'paquete_id' => 1,
			'empleado_id' => 1,
			'fecha' => '2016-05-10 00:46:04'
		),
	);

}
