<?php
App::uses('AppModel', 'Model');
/**
 * Curso Model
 *
 * @property Clase $Clase
 * @property Miembro $Miembro
 */
class Curso extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'clase_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'Clase' => array(
			'className' => 'Clase',
			'foreignKey' => 'clase_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Miembro' => array(
			'className' => 'Miembro',
			'foreignKey' => 'miembro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
