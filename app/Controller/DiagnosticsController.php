<?php
App::uses('AppController', 'Controller');
/**
 * Diagnostics Controller
 *
 * @property Diagnostic $Diagnostic
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DiagnosticsController extends AppController {

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
		$this->Diagnostic->recursive = 0;
		$this->set('diagnostics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diagnostic->exists($id)) {
			throw new NotFoundException(__('Invalid diagnostic'));
		}
		$options = array('conditions' => array('Diagnostic.' . $this->Diagnostic->primaryKey => $id));
		$this->set('diagnostic', $this->Diagnostic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diagnostic->create();
			if ($this->Diagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnostic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostic could not be saved. Please, try again.'));
			}
		}
		$people = $this->Diagnostic->Person->find('list');
		$histories = $this->Diagnostic->History->find('list');
		$this->set(compact('people', 'histories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Diagnostic->exists($id)) {
			throw new NotFoundException(__('Invalid diagnostic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Diagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnostic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Diagnostic.' . $this->Diagnostic->primaryKey => $id));
			$this->request->data = $this->Diagnostic->find('first', $options);
		}
		$people = $this->Diagnostic->Person->find('list');
		$histories = $this->Diagnostic->History->find('list');
		$this->set(compact('people', 'histories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Diagnostic->id = $id;
		if (!$this->Diagnostic->exists()) {
			throw new NotFoundException(__('Invalid diagnostic'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Diagnostic->delete()) {
			$this->Session->setFlash(__('The diagnostic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The diagnostic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
