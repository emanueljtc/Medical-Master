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
		$this->set('charges', $this->paginate());
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
			throw new NotFoundException(__('El Pago no Existe'));
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
				$this->Session->setFlash(__('El Pago ha sido registrado Correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Pago no ha sido registrado, Verifique e Intente de nuevo.'), 'flash/error');
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
        $this->Charge->id = $id;
		if (!$this->Charge->exists($id)) {
			throw new NotFoundException(__('El Pago no Existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Charge->save($this->request->data)) {
				$this->Session->setFlash(__('El Pago ha sido actualizado Correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Pago no ha sido actualizado, Verifique e Intente de Nuevo.'), 'flash/error');
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
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Charge->id = $id;
		if (!$this->Charge->exists()) {
			throw new NotFoundException(__('El Pago no Existe'));
		}
		if ($this->Charge->delete()) {
			$this->Session->setFlash(__('El Pago fue Eliminado'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Pago no ha sido Eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
