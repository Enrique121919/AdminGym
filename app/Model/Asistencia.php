<?php
App::uses('AppModel', 'Model');
/**
 * Asistencia Model
 *
 * @property Miembro $Miembro
 */
class Asistencia extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'miembro_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Miembro' => array(
			'className' => 'Miembro',
			'foreignKey' => 'miembro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
