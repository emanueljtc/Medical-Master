<?php
App::uses('AppController', 'Controller');
/**
 * Nationalities Controller
 *
 * @property Nationality $Nationality
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NationalitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Nationality->recursive = 0;
		$this->set('nationalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nationality->exists($id)) {
			throw new NotFoundException(__('Invalid nationality'));
		}
		$options = array('conditions' => array('Nationality.' . $this->Nationality->primaryKey => $id));
		$this->set('nationality', $this->Nationality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nationality->create();
			if ($this->Nationality->save($this->request->data)) {
				$this->Session->setFlash(__('The nationality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nationality could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Nationality->exists($id)) {
			throw new NotFoundException(__('Invalid nationality'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nationality->save($this->request->data)) {
				$this->Session->setFlash(__('The nationality has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nationality could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Nationality.' . $this->Nationality->primaryKey => $id));
			$this->request->data = $this->Nationality->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Nationality->id = $id;
		if (!$this->Nationality->exists()) {
			throw new NotFoundException(__('Invalid nationality'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Nationality->delete()) {
			$this->Session->setFlash(__('The nationality has been deleted.'));
		} else {
			$this->Session->setFlash(__('The nationality could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
