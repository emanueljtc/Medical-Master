<?php
App::uses('AppController', 'Controller');
/**
 * Citations Controller
 *
 * @property Citation $Citation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CitationsController extends AppController {

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
		$this->Citation->recursive = 0;
		$this->set('citations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Citation->exists($id)) {
			throw new NotFoundException(__('La Cita No Existe'));
		}
		$options = array('conditions' => array('Citation.' . $this->Citation->primaryKey => $id));
		$this->set('citation', $this->Citation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Citation->create();
			if ($this->Citation->save($this->request->data)) {
				$this->Session->setFlash(__('La cita ha sido guardada.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cita no ha sido guardada. por favor, Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->Citation->Person->find('list');
		$datecitations = $this->Citation->Datecitation->find('list');
		$this->set(compact('people', 'datecitations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Citation->exists($id)) {
			throw new NotFoundException(__('La Cita No Existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Citation->save($this->request->data)) {
				$this->Session->setFlash(__('La cita ha sido actualizada.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cita no ha sido actualizada. por favor, Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Citation.' . $this->Citation->primaryKey => $id));
			$this->request->data = $this->Citation->find('first', $options);
		}
		$people = $this->Citation->Person->find('list');
		$datecitations = $this->Citation->Datecitation->find('list');
		$this->set(compact('people', 'datecitations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Citation->id = $id;
		if (!$this->Citation->exists()) {
			throw new NotFoundException(__('La cita no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Citation->delete()) {
			$this->Session->setFlash(__('La cita ha sido eliminada.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('La cita no ha sido eliminada. Por favor, Intente de Nuevo.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
