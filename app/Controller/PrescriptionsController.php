<?php
App::uses('AppController', 'Controller');
/**
 * Prescriptions Controller
 *
 * @property Prescription $Prescription
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PrescriptionsController extends AppController {

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
		$this->Prescription->recursive = 0;
		$this->set('prescriptions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prescription->exists($id)) {
			throw new NotFoundException(__('El Recipe no existe'));
		}
		$options = array('conditions' => array('Prescription.' . $this->Prescription->primaryKey => $id));
		$this->set('prescription', $this->Prescription->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prescription->create();
			if ($this->Prescription->save($this->request->data)) {
				$this->Session->setFlash(__('El recipe ha sido registrado correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El recipe no ha sido registrado correctamente, por favor intente de nuevo.'), 'flash/error');
			}
		}
		$people = $this->Prescription->Person->find('list',array('order'=>'id DESC'));
		$diagnostics = $this->Prescription->Diagnostic->find('list',array('order'=>'id DESC'));
		$this->set(compact('people', 'diagnostics'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Prescription->id = $id;
		if (!$this->Prescription->exists($id)) {
			throw new NotFoundException(__('El recipe no existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prescription->save($this->request->data)) {
				$this->Session->setFlash(__('El recipe ha sido actualizado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El recipe no ha sido actualizado, por favor intente de nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Prescription.' . $this->Prescription->primaryKey => $id));
			$this->request->data = $this->Prescription->find('first', $options);
		}
		$people = $this->Prescription->Person->find('list');
		$diagnostics = $this->Prescription->Diagnostic->find('list');
		$this->set(compact('people', 'diagnostics'));
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
		$this->Prescription->id = $id;
		if (!$this->Prescription->exists()) {
			throw new NotFoundException(__('El recipe no existe'));
		}
		if ($this->Prescription->delete()) {
			$this->Session->setFlash(__('Recipe Eliminado correctamente'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Recipe no eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
