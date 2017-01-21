<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
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
		$this->set('typepayments', $this->paginate());
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
			throw new NotFoundException(__('Tipo de Pago no Existe'));
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
				$this->Session->setFlash(__('El tipo de pago ha sido guardado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo de pago no ha sido guardado. Por Favor, Intente de Nuevo.'), 'flash/error');
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
        $this->Typepayment->id = $id;
		if (!$this->Typepayment->exists($id)) {
			throw new NotFoundException(__('Tipo de Pago no Existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Typepayment->save($this->request->data)) {
				$this->Session->setFlash(__('El tipo de pago ha sido actualizado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tipo de pago no ha sido actualizado. Por Favor, Intente de Nuevo.'), 'flash/error');
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
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Typepayment->id = $id;
		if (!$this->Typepayment->exists()) {
			throw new NotFoundException(__('Tipo de Pago no Existe'));
		}
		if ($this->Typepayment->delete()) {
			$this->Session->setFlash(__('El tipo de pago ha sido eliminado'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El tipo de pago ha sido eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
