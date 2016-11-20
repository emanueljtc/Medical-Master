<?php
App::uses('AppController', 'Controller');
/**
 * Specialties Controller
 *
 * @property Specialty $Specialty
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SpecialtiesController extends AppController {

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
		$this->Specialty->recursive = 0;
		$this->set('specialties', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Specialty->exists($id)) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		$options = array('conditions' => array('Specialty.' . $this->Specialty->primaryKey => $id));
		$this->set('specialty', $this->Specialty->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Specialty->create();
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('The specialty has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'));
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
		if (!$this->Specialty->exists($id)) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('The specialty has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specialty could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Specialty.' . $this->Specialty->primaryKey => $id));
			$this->request->data = $this->Specialty->find('first', $options);
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
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('Invalid specialty'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Specialty->delete()) {
			$this->Session->setFlash(__('The specialty has been deleted.'));
		} else {
			$this->Session->setFlash(__('The specialty could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
