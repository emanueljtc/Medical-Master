<?php
App::uses('AppController', 'Controller');
/**
 * Charges Controller
 *
 * @property Charge $Charge
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ChargesController extends AppController {

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
		$this->Charge->recursive = 0;
		$this->set('charges', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Charge->exists($id)) {
			throw new NotFoundException(__('Invalid charge'));
		}
		$options = array('conditions' => array('Charge.' . $this->Charge->primaryKey => $id));
		$this->set('charge', $this->Charge->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Charge->create();
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('The charge has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charge could not be saved. Please, try again.'));
			}
		}
		$people = $this->Charge->Person->find('list');
		$quotes = $this->Charge->Quote->find('list');
		$this->set(compact('people', 'quotes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Charge->exists($id)) {
			throw new NotFoundException(__('Invalid charge'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('The charge has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charge could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Charge.' . $this->Charge->primaryKey => $id));
			$this->request->data = $this->Charge->find('first', $options);
		}
		$people = $this->Charge->Person->find('list');
		$quotes = $this->Charge->Quote->find('list');
		$this->set(compact('people', 'quotes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Charge->id = $id;
		if (!$this->Charge->exists()) {
			throw new NotFoundException(__('Invalid charge'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Charge->delete()) {
			$this->Session->setFlash(__('The charge has been deleted.'));
		} else {
			$this->Session->setFlash(__('The charge could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
