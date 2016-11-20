<?php
App::uses('AppModel', 'Model');
/**
 * DignosticsSpecialty Model
 *
 * @property Dignostic $Dignostic
 * @property Treament $Treament
 * @property History $History
 * @property Specialitie $Specialitie
 * @property Oncological $Oncological
 */
class DignosticsSpecialty extends AppModel {

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
		'dignostic_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'treament_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dignostic' => array(
			'className' => 'Dignostic',
			'foreignKey' => 'dignostic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Treament' => array(
			'className' => 'Treament',
			'foreignKey' => 'treament_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'History' => array(
			'className' => 'History',
			'foreignKey' => 'history_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Specialitie' => array(
			'className' => 'Specialitie',
			'foreignKey' => 'specialitie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Oncological' => array(
			'className' => 'Oncological',
			'foreignKey' => 'oncological_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
