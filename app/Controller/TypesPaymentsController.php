<?php
App::uses('AppController', 'Controller');
/**
 * TypesPayments Controller
 *
 * @property TypesPayment $TypesPayment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypesPaymentsController extends AppController {

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
		$this->TypesPayment->recursive = 0;
		$this->set('typesPayments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypesPayment->exists($id)) {
			throw new NotFoundException(__('Invalid types payment'));
		}
		$options = array('conditions' => array('TypesPayment.' . $this->TypesPayment->primaryKey => $id));
		$this->set('typesPayment', $this->TypesPayment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypesPayment->create();
			if ($this->TypesPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The types payment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The types payment could not be saved. Please, try again.'));
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
		if (!$this->TypesPayment->exists($id)) {
			throw new NotFoundException(__('Invalid types payment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypesPayment->save($this->request->data)) {
				$this->Session->setFlash(__('The types payment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The types payment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypesPayment.' . $this->TypesPayment->primaryKey => $id));
			$this->request->data = $this->TypesPayment->find('first', $options);
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
		$this->TypesPayment->id = $id;
		if (!$this->TypesPayment->exists()) {
			throw new NotFoundException(__('Invalid types payment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypesPayment->delete()) {
			$this->Session->setFlash(__('The types payment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The types payment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
