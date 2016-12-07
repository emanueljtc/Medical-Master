<?php
App::uses('AppController', 'Controller');
/**
 * Datecitations Controller
 *
 * @property Datecitation $Datecitation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DatecitationsController extends AppController {

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
		$this->Datecitation->recursive = 0;
		$this->set('datecitations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Datecitation->exists($id)) {
			throw new NotFoundException(__('Estado de cita no existe'));
		}
		$options = array('conditions' => array('Datecitation.' . $this->Datecitation->primaryKey => $id));
		$this->set('datecitation', $this->Datecitation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Datecitation->create();
			if ($this->Datecitation->save($this->request->data)) {
				$this->Session->setFlash(__('El estado de cita ha sido registrado.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estado de cita no ha sido registrado. Por Favor, Intente de Nuevo.'), 'flash/error');
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
		if (!$this->Datecitation->exists($id)) {
			throw new NotFoundException(__('Estado de cita no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Datecitation->save($this->request->data)) {
				$this->Session->setFlash(__('El estado de cita ha sido actualizado.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estado de cita no ha sido registrado. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Datecitation.' . $this->Datecitation->primaryKey => $id));
			$this->request->data = $this->Datecitation->find('first', $options);
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
		$this->Datecitation->id = $id;
		if (!$this->Datecitation->exists()) {
			throw new NotFoundException(__('Estado de cita no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Datecitation->delete()) {
			$this->Session->setFlash(__('El estado de cita ha sido eliminado.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('El estado de cita no ha sido eliminado. Por Favor, Intente de Nuevo.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
