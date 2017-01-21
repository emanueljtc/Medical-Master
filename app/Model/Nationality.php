<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
<?php
App::uses('AppModel', 'Model');
/**
 * Nationality Model
 *
 * @property Person $Person
 */
class Nationality extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nacionalidad';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nacionalidad' => array(
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
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'nationality_id',
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
