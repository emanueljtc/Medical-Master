<?php
App::uses('AppController', 'Controller');
/**
 * ConditionsCitations Controller
 *
 * @property ConditionsCitation $ConditionsCitation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConditionsCitationsController extends AppController {

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
		$this->ConditionsCitation->recursive = 0;
		$this->set('conditionsCitations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ConditionsCitation->exists($id)) {
			throw new NotFoundException(__('Invalid conditions citation'));
		}
		$options = array('conditions' => array('ConditionsCitation.' . $this->ConditionsCitation->primaryKey => $id));
		$this->set('conditionsCitation', $this->ConditionsCitation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ConditionsCitation->create();
			if ($this->ConditionsCitation->save($this->request->data)) {
				$this->Session->setFlash(__('The conditions citation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conditions citation could not be saved. Please, try again.'));
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
		if (!$this->ConditionsCitation->exists($id)) {
			throw new NotFoundException(__('Invalid conditions citation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ConditionsCitation->save($this->request->data)) {
				$this->Session->setFlash(__('The conditions citation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conditions citation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ConditionsCitation.' . $this->ConditionsCitation->primaryKey => $id));
			$this->request->data = $this->ConditionsCitation->find('first', $options);
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
		$this->ConditionsCitation->id = $id;
		if (!$this->ConditionsCitation->exists()) {
			throw new NotFoundException(__('Invalid conditions citation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ConditionsCitation->delete()) {
			$this->Session->setFlash(__('The conditions citation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conditions citation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
