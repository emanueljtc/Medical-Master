<?php
App::uses('AppModel', 'Model');
/**
 * DoctorSpecialty Model
 *
 * @property Rol $Rol
 * @property Specialtie $Specialtie
 */
class DoctorSpecialty extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'doctor_ specialties';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'specialtie_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rol_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'rol_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'specialtie_id' => array(
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
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Specialtie' => array(
			'className' => 'Specialtie',
			'foreignKey' => 'specialtie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
