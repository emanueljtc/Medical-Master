<?php
App::uses('AppController', 'Controller');
/**
 * Diagnosticoncologicals Controller
 *
 * @property Diagnosticoncological $Diagnosticoncological
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DiagnosticoncologicalsController extends AppController {

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
		$this->Diagnosticoncological->recursive = 0;
		$this->set('diagnosticoncologicals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diagnosticoncological->exists($id)) {
			throw new NotFoundException(__('Invalid diagnosticoncological'));
		}
		$options = array('conditions' => array('Diagnosticoncological.' . $this->Diagnosticoncological->primaryKey => $id));
		$this->set('diagnosticoncological', $this->Diagnosticoncological->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diagnosticoncological->create();
			if ($this->Diagnosticoncological->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnosticoncological has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnosticoncological could not be saved. Please, try again.'));
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
		if (!$this->Diagnosticoncological->exists($id)) {
			throw new NotFoundException(__('Invalid diagnosticoncological'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Diagnosticoncological->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnosticoncological has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnosticoncological could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Diagnosticoncological.' . $this->Diagnosticoncological->primaryKey => $id));
			$this->request->data = $this->Diagnosticoncological->find('first', $options);
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
		$this->Diagnosticoncological->id = $id;
		if (!$this->Diagnosticoncological->exists()) {
			throw new NotFoundException(__('Invalid diagnosticoncological'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Diagnosticoncological->delete()) {
			$this->Session->setFlash(__('The diagnosticoncological has been deleted.'));
		} else {
			$this->Session->setFlash(__('The diagnosticoncological could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
