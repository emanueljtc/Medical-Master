<?php
App::uses('AppController', 'Controller');
/**
 * Antecedents Controller
 *
 * @property Antecedent $Antecedent
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AntecedentsController extends AppController {

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
		$this->Antecedent->recursive = 0;
		$this->set('antecedents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Antecedent->exists($id)) {
			throw new NotFoundException(__('Invalid antecedent'));
		}
		$options = array('conditions' => array('Antecedent.' . $this->Antecedent->primaryKey => $id));
		$this->set('antecedent', $this->Antecedent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Antecedent->create();
			if ($this->Antecedent->save($this->request->data)) {
				$this->Session->setFlash(__('The antecedent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedent could not be saved. Please, try again.'));
			}
		}
		$people = $this->Antecedent->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Antecedent->exists($id)) {
			throw new NotFoundException(__('Invalid antecedent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Antecedent->save($this->request->data)) {
				$this->Session->setFlash(__('The antecedent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Antecedent.' . $this->Antecedent->primaryKey => $id));
			$this->request->data = $this->Antecedent->find('first', $options);
		}
		$people = $this->Antecedent->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Antecedent->id = $id;
		if (!$this->Antecedent->exists()) {
			throw new NotFoundException(__('Invalid antecedent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Antecedent->delete()) {
			$this->Session->setFlash(__('The antecedent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The antecedent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
