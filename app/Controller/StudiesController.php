<?php
App::uses('AppController', 'Controller');
/**
 * Studies Controller
 *
 * @property Study $Study
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StudiesController extends AppController {

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
		$this->Study->recursive = 0;
		$this->set('studies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Study->exists($id)) {
			throw new NotFoundException(__('El estudio no existe'));
		}
		$options = array('conditions' => array('Study.' . $this->Study->primaryKey => $id));
		$this->set('study', $this->Study->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Study->create();
			if ($this->Study->save($this->request->data)) {
				$this->Session->setFlash(__('El estudio ha sido registrado.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estudio no ha sido registrado, Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		}
		$diagnostics = $this->Study->Diagnostic->find('list');
		$people = $this->Study->Person->find('list');
		$this->set(compact('diagnostics', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Study->exists($id)) {
			throw new NotFoundException(__('El estudio no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Study->save($this->request->data)) {
				$this->Session->setFlash(__('El estudio ha sido actualizado.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estudio no ha sido actuaizado. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Study.' . $this->Study->primaryKey => $id));
			$this->request->data = $this->Study->find('first', $options);
		}
		$diagnostics = $this->Study->Diagnostic->find('list');
		$people = $this->Study->Person->find('list');
		$this->set(compact('diagnostics', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Study->id = $id;
		if (!$this->Study->exists()) {
			throw new NotFoundException(__('El estudio no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Study->delete()) {
			$this->Session->setFlash(__('El estudio ha sido eliminado.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('El estudio no ha sido eliminado. Por Favor, Intente de Nuevo.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
