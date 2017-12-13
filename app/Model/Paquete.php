<?php
App::uses('AppModel', 'Model');
/**
 * Paquete Model
 *
 * @property Inscripcion $Inscripcion
 */
class Paquete extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'paquete_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
