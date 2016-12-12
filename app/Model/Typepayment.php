<?php
App::uses('AppModel', 'Model');
/**
 * Typepayment Model
 *
 * @property Charge $Charge
 */
class Typepayment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'type_payment';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'type_payment' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Vacio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Charge' => array(
			'className' => 'Charge',
			'foreignKey' => 'typepayment_id',
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
