<?php
App::uses('Citum', 'Model');

/**
 * Citum Test Case
 *
 */
class CitumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.citum',
		'app.person',
		'app.rol',
		'app.doctor_specialty',
		'app.specialtie',
		'app.nationality',
		'app.antecedent',
		'app.history',
		'app.dignostics_specialty',
		'app.dignostic',
		'app.treament',
		'app.specialitie',
		'app.oncological',
		'app.treatment',
		'app.quote',
		'app.state_quote',
		'app.charge',
		'app.indication',
		'app.diagnostic',
		'app.study',
		'app.condition_citation'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Citum = ClassRegistry::init('Citum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Citum);

		parent::tearDown();
	}

}
