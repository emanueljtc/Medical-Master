<?php
App::uses('AppController', 'Controller');
/**
 * Indications Controller
 *
 * @property Indication $Indication
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IndicationsController extends AppController {

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
		$this->Indication->recursive = 0;
		$this->set('indications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Indication->exists($id)) {
			throw new NotFoundException(__('Invalid indication'));
		}
		$options = array('conditions' => array('Indication.' . $this->Indication->primaryKey => $id));
		$this->set('indication', $this->Indication->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Indication->create();
			if ($this->Indication->save($this->request->data)) {
				$this->Session->setFlash(__('The indication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The indication could not be saved. Please, try again.'));
			}
		}
		$diagnostics = $this->Indication->Diagnostic->find('list');
		$people = $this->Indication->Person->find('list');
		$this->set(compact('diagnostics', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Indication->exists($id)) {
			throw new NotFoundException(__('Invalid indication'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Indication->save($this->request->data)) {
				$this->Session->setFlash(__('The indication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The indication could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Indication.' . $this->Indication->primaryKey => $id));
			$this->request->data = $this->Indication->find('first', $options);
		}
		$diagnostics = $this->Indication->Diagnostic->find('list');
		$people = $this->Indication->Person->find('list');
		$this->set(compact('diagnostics', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Indication->id = $id;
		if (!$this->Indication->exists()) {
			throw new NotFoundException(__('Invalid indication'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Indication->delete()) {
			$this->Session->setFlash(__('The indication has been deleted.'));
		} else {
			$this->Session->setFlash(__('The indication could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
