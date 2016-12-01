<?php
App::uses('AppModel', 'Model');
/**
 * Datecitation Model
 *
 * @property Citation $Citation
 */
class Datecitation extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'state';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'state' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Citation' => array(
			'className' => 'Citation',
			'foreignKey' => 'datecitation_id',
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
