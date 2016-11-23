<?php
App::uses('Study', 'Model');

/**
 * Study Test Case
 *
 */
class StudyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.study',
		'app.diagnostic',
		'app.indication',
		'app.person',
		'app.rol',
		'app.doctor_specialty',
		'app.specialtie',
		'app.nationality',
		'app.charge',
		'app.quote',
		'app.state_quote',
		'app.treatment',
		'app.history',
		'app.antecedent',
		'app.historys',
		'app.dignostics_specialty',
		'app.dignostic',
		'app.treament',
		'app.specialitie',
		'app.oncological'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Study = ClassRegistry::init('Study');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Study);

		parent::tearDown();
	}

}
