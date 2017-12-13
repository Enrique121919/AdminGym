<?php
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
App::uses('AppModel', 'Model');
/**
 * Empleado Model
 *
 * @property Tipo $Tipo
 * @property Inscripcion $Inscripcion
 */
class Empleado extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Inscripcion' => array(
			'className' => 'Inscripcion',
			'foreignKey' => 'empleado_id',
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

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['clave'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['clave'] = $passwordHasher->hash($this->data[$this->alias]['clave']);

		}
		return true;
	}

}
