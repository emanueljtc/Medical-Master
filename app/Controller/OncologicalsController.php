<?php
App::uses('AppController', 'Controller');
/**
 * Oncologicals Controller
 *
 * @property Oncological $Oncological
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class OncologicalsController extends AppController {

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
		$this->Oncological->recursive = 0;
		$this->set('oncologicals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Oncological->exists($id)) {
			throw new NotFoundException(__('Invalid oncological'));
		}
		$options = array('conditions' => array('Oncological.' . $this->Oncological->primaryKey => $id));
		$this->set('oncological', $this->Oncological->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Oncological->create();
			if ($this->Oncological->save($this->request->data)) {
				$this->Session->setFlash(__('The oncological has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oncological could not be saved. Please, try again.'));
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
		if (!$this->Oncological->exists($id)) {
			throw new NotFoundException(__('Invalid oncological'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Oncological->save($this->request->data)) {
				$this->Session->setFlash(__('The oncological has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The oncological could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Oncological.' . $this->Oncological->primaryKey => $id));
			$this->request->data = $this->Oncological->find('first', $options);
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
		$this->Oncological->id = $id;
		if (!$this->Oncological->exists()) {
			throw new NotFoundException(__('Invalid oncological'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Oncological->delete()) {
			$this->Session->setFlash(__('The oncological has been deleted.'));
		} else {
			$this->Session->setFlash(__('The oncological could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
