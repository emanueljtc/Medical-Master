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
			throw new NotFoundException(__('Pago No Existe'));
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
				$this->Session->setFlash(__('Pago registrado.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Pago no ha sido registrado. por favor, Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->Charge->Person->find('list');
		$citations = $this->Charge->Citation->find('list');
		$typepayments = $this->Charge->Typepayment->find('list');
		$this->set(compact('people', 'citations', 'typepayments'));
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
			throw new NotFoundException(__('Pago No Existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('El pago ha sido actualizado.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El pago no ha sido actualizado. Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Charge.' . $this->Charge->primaryKey => $id));
			$this->request->data = $this->Charge->find('first', $options);
		}
		$people = $this->Charge->Person->find('list');
		$citations = $this->Charge->Citation->find('list');
		$typepayments = $this->Charge->Typepayment->find('list');
		$this->set(compact('people', 'citations', 'typepayments'));
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
			throw new NotFoundException(__('Pago No Existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Charge->delete()) {
			$this->Session->setFlash(__('El pago ha sido eliminado.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('El pago no ha sido eliminado, Intente de Nuevo.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
