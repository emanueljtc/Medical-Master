<?php
App::uses('AppController', 'Controller');
/**
 * Typepayments Controller
 *
 * @property Typepayment $Typepayment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypepaymentsController extends AppController {

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
		$this->Typepayment->recursive = 0;
		$this->set('typepayments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Typepayment->exists($id)) {
			throw new NotFoundException(__('Invalid typepayment'));
		}
		$options = array('conditions' => array('Typepayment.' . $this->Typepayment->primaryKey => $id));
		$this->set('typepayment', $this->Typepayment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Typepayment->create();
			if ($this->Typepayment->save($this->request->data)) {
				$this->Session->setFlash(__('The typepayment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typepayment could not be saved. Please, try again.'));
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
		if (!$this->Typepayment->exists($id)) {
			throw new NotFoundException(__('Invalid typepayment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Typepayment->save($this->request->data)) {
				$this->Session->setFlash(__('The typepayment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The typepayment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Typepayment.' . $this->Typepayment->primaryKey => $id));
			$this->request->data = $this->Typepayment->find('first', $options);
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
		$this->Typepayment->id = $id;
		if (!$this->Typepayment->exists()) {
			throw new NotFoundException(__('Invalid typepayment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Typepayment->delete()) {
			$this->Session->setFlash(__('The typepayment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The typepayment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
