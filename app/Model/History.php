<?php
App::uses('AppModel', 'Model');
/**
 * History Model
 *
 * @property Person $Person
 * @property Antecedent $Antecedent
 * @property Diagnostic $Diagnostic
 */
class History extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'historys';

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
		'person_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'EL CAMPO ES NUMERICO',
				),
				'isUnique' => array(
					'rule' => array('isUnique'),
					'message' => 'EL PACIENTE YA TIENE SU NUMERO DE HISTORIA ASIGNADO',
					'required' => 'create'
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
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Diagnostic' => array(
			'className' => 'Diagnostic',
			'foreignKey' => 'history_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Antecedent' => array(
			'className' => 'Antecedent',
			'foreignKey' => 'history_id',
			'dependent' => false
		)
	);

}
