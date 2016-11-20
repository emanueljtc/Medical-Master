<?php
App::uses('AppController', 'Controller');
/**
 * DignosticsSpecialties Controller
 *
 * @property DignosticsSpecialty $DignosticsSpecialty
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DignosticsSpecialtiesController extends AppController {

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
		$this->DignosticsSpecialty->recursive = 0;
		$this->set('dignosticsSpecialties', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DignosticsSpecialty->exists($id)) {
			throw new NotFoundException(__('Invalid dignostics specialty'));
		}
		$options = array('conditions' => array('DignosticsSpecialty.' . $this->DignosticsSpecialty->primaryKey => $id));
		$this->set('dignosticsSpecialty', $this->DignosticsSpecialty->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DignosticsSpecialty->create();
			if ($this->DignosticsSpecialty->save($this->request->data)) {
				$this->Session->setFlash(__('The dignostics specialty has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dignostics specialty could not be saved. Please, try again.'));
			}
		}
		$dignostics = $this->DignosticsSpecialty->Dignostic->find('list');
		$treaments = $this->DignosticsSpecialty->Treament->find('list');
		$histories = $this->DignosticsSpecialty->History->find('list');
		$specialities = $this->DignosticsSpecialty->Specialitie->find('list');
		$oncologicals = $this->DignosticsSpecialty->Oncological->find('list');
		$this->set(compact('dignostics', 'treaments', 'histories', 'specialities', 'oncologicals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DignosticsSpecialty->exists($id)) {
			throw new NotFoundException(__('Invalid dignostics specialty'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DignosticsSpecialty->save($this->request->data)) {
				$this->Session->setFlash(__('The dignostics specialty has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dignostics specialty could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DignosticsSpecialty.' . $this->DignosticsSpecialty->primaryKey => $id));
			$this->request->data = $this->DignosticsSpecialty->find('first', $options);
		}
		$dignostics = $this->DignosticsSpecialty->Dignostic->find('list');
		$treaments = $this->DignosticsSpecialty->Treament->find('list');
		$histories = $this->DignosticsSpecialty->History->find('list');
		$specialities = $this->DignosticsSpecialty->Specialitie->find('list');
		$oncologicals = $this->DignosticsSpecialty->Oncological->find('list');
		$this->set(compact('dignostics', 'treaments', 'histories', 'specialities', 'oncologicals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DignosticsSpecialty->id = $id;
		if (!$this->DignosticsSpecialty->exists()) {
			throw new NotFoundException(__('Invalid dignostics specialty'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DignosticsSpecialty->delete()) {
			$this->Session->setFlash(__('The dignostics specialty has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dignostics specialty could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
