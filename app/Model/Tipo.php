<?php
App::uses('AppModel', 'Model');
/**
 * Tipo Model
 *
 * @property Empleado $Empleado
 */
class Tipo extends AppModel {

	// The Associations below have been created with all possible keys, those that are not needed can be removed
	public $virtualFields = array('nombre_tipo' => 'Tipo.nombre');
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'tipo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => '',
		),
	);

}
