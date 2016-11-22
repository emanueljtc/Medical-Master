<?php
App::uses('Datecitation', 'Model');

/**
 * Datecitation Test Case
 *
 */
class DatecitationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.datecitation',
		'app.citation',
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
		'app.study'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Datecitation = ClassRegistry::init('Datecitation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Datecitation);

		parent::tearDown();
	}

}
