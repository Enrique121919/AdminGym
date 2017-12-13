<?php
/**
 * Curso Fixture
 */
class CursoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dia' => array('type' => 'date', 'null' => true, 'default' => null),
		'hora' => array('type' => 'time', 'null' => true, 'default' => null),
		'clase_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'miembro_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id', 'clase_id', 'miembro_id'), 'unique' => 1),
			'fk_cursos_clases1_idx' => array('column' => 'clase_id', 'unique' => 0),
			'fk_cursos_miembros1_idx' => array('column' => 'miembro_id', 'unique' => 0)
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
			'dia' => '2016-05-10',
			'hora' => '00:46:04',
			'clase_id' => 1,
			'miembro_id' => 1
		),
	);

}
