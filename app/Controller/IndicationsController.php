<?php
App::uses('AppController', 'Controller');
/**
 * Indications Controller
 *
 * @property Indication $Indication
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class IndicationsController extends AppController {

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
		$this->Indication->recursive = 0;
		$this->set('indications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Indication->exists($id)) {
			throw new NotFoundException(__('La Indicacion no Existe'));
		}
		$options = array('conditions' => array('Indication.' . $this->Indication->primaryKey => $id));
		$this->set('indication', $this->Indication->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Indication->create();
			if ($this->Indication->save($this->request->data)) {
				$this->Session->setFlash(__('La indicacion ha sido guardada.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La indicacion no ha sido guardada. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		}
		$diagnostics = $this->Indication->Diagnostic->find('list');
		$treatments = $this->Indication->Treatment->find('list');
		$people = $this->Indication->Person->find('list');
		$this->set(compact('diagnostics', 'treatments', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Indication->exists($id)) {
			throw new NotFoundException(__('La Indicacion no Existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Indication->save($this->request->data)) {
				$this->Session->setFlash(__('La indicacion ha sido actualizada.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La indicacion no ha sido actualizada. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Indication.' . $this->Indication->primaryKey => $id));
			$this->request->data = $this->Indication->find('first', $options);
		}
		$diagnostics = $this->Indication->Diagnostic->find('list');
		$treatments = $this->Indication->Treatment->find('list');
		$people = $this->Indication->Person->find('list');
		$this->set(compact('diagnostics', 'treatments', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Indication->id = $id;
		if (!$this->Indication->exists()) {
			throw new NotFoundException(__('La Indicacion no Existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Indication->delete()) {
			$this->Session->setFlash(__('La Indicacion ha sido eliminada.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('La indicacion no ha sido eliminada. Por Favor, Intente de Nuevo.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
