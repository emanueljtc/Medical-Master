<?php
App::uses('AppController', 'Controller');
/**
 * Treatments Controller
 *
 * @property Treatment $Treatment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TreatmentsController extends AppController {

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
		$this->Treatment->recursive = 0;
		$this->set('treatments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Treatment->exists($id)) {
			throw new NotFoundException(__('El tratamiento no existe'));
		}
		$options = array('conditions' => array('Treatment.' . $this->Treatment->primaryKey => $id));
		$this->set('treatment', $this->Treatment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Treatment->create();
			if ($this->Treatment->save($this->request->data)) {
				$this->Session->setFlash(__('El tratamiento ha sido guardado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('EL tratamiento. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->Treatment->Person->find('list');
		$diagnostics = $this->Treatment->Diagnostic->find('list');
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
        $this->Treatment->id = $id;
		if (!$this->Treatment->exists($id)) {
			throw new NotFoundException(__('El tratamiento no existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Treatment->save($this->request->data)) {
				$this->Session->setFlash(__('El tratamiento ha sido actualizado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tratamiento no ha sido actualizado. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Treatment.' . $this->Treatment->primaryKey => $id));
			$this->request->data = $this->Treatment->find('first', $options);
		}
		$people = $this->Treatment->Person->find('list');
		$diagnostics = $this->Treatment->Diagnostic->find('list');
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
		$this->Treatment->id = $id;
		if (!$this->Treatment->exists()) {
			throw new NotFoundException(__('El tratamiento no existe'));
		}
		if ($this->Treatment->delete()) {
			$this->Session->setFlash(__('El tratamiento ha sido eliminado'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El tratamiento no ha sido eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
