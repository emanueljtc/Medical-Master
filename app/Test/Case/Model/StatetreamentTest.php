<?php
App::uses('Statetreament', 'Model');

/**
 * Statetreament Test Case
 *
 */
class StatetreamentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.statetreament'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Statetreament = ClassRegistry::init('Statetreament');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Statetreament);

		parent::tearDown();
	}

}
