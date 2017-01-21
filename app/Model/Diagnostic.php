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
 * Diagnostic Model
 *
 * @property Person $Person
 * @property History $History
 * @property Indication $Indication
 * @property Study $Study
 * @property Treatment $Treatment
 */
class Diagnostic extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
	// public $virtualFields = array(
	// 		'resultado' => 'CONCAT(id , " ", diagnostico)',
	// );

/**
 * Validation rules
 *
 * @var array
 */
	// public $validate = array(
	// 	'size_boobs' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'form_boobs' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'symmetry_boobs' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'skin_boobs' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'cap_boobs' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'pussy' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'neck_pussy' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'coloscopia' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'ano_ straight' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'head_neck' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'touch_tumor' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'form_tumor' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'surface_tumor' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'contour_tumor' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'axis_tumor' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 		'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'consistency_tumor' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'laringoscopia' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'menarguia' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'reglas' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'prs' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 		'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'companion_sexual' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'distance_cap' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'gestas' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'rsi' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 		'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'paras' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 		'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'abdomen' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'misbirth' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'gynecological_vulva' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'cesareans' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'age_birth_one' => array(
	// 		'numeric' => array(
	// 			'rule' => array('numeric'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'diagnostico' => array(
	// 		'notEmpty' => array(
	// 			'rule' => array('notEmpty'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'person_id' => array(
	// 		'numeric' => array(
	// 			'rule' => array('numeric'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// 	'history_id' => array(
	// 		'numeric' => array(
	// 			'rule' => array('numeric'),
	// 			'message' => 'Campo Vacio',
	// 			//'allowEmpty' => false,
	// 			//'required' => false,
	// 			//'last' => false, // Stop validation after this rule
	// 			//'on' => 'create', // Limit validation to 'create' or 'update' operations
	// 		),
	// 	),
	// );

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
		),
		'History' => array(
			'className' => 'History',
			'foreignKey' => 'history_id',
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
		'Prescription' => array(
			'className' => 'Prescription',
			'foreignKey' => 'diagnostic_id',
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
		'Study' => array(
			'className' => 'Study',
			'foreignKey' => 'diagnostic_id',
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

	);

}
