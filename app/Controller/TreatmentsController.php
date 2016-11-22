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
		$this->set('treatments', $this->Paginator->paginate());
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
			throw new NotFoundException(__('Invalid treatment'));
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
				$this->Session->setFlash(__('The treatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The treatment could not be saved. Please, try again.'));
			}
		}
		$people = $this->Treatment->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Treatment->exists($id)) {
			throw new NotFoundException(__('Invalid treatment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Treatment->save($this->request->data)) {
				$this->Session->setFlash(__('The treatment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The treatment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Treatment.' . $this->Treatment->primaryKey => $id));
			$this->request->data = $this->Treatment->find('first', $options);
		}
		$people = $this->Treatment->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Treatment->id = $id;
		if (!$this->Treatment->exists()) {
			throw new NotFoundException(__('Invalid treatment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Treatment->delete()) {
			$this->Session->setFlash(__('The treatment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The treatment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
