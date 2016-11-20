<?php
App::uses('AppController', 'Controller');
/**
 * DoctorSpecialties Controller
 *
 * @property DoctorSpecialty $DoctorSpecialty
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DoctorSpecialtiesController extends AppController {

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
		$this->DoctorSpecialty->recursive = 0;
		$this->set('doctorSpecialties', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DoctorSpecialty->exists($id)) {
			throw new NotFoundException(__('Invalid doctor specialty'));
		}
		$options = array('conditions' => array('DoctorSpecialty.' . $this->DoctorSpecialty->primaryKey => $id));
		$this->set('doctorSpecialty', $this->DoctorSpecialty->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DoctorSpecialty->create();
			if ($this->DoctorSpecialty->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor specialty has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor specialty could not be saved. Please, try again.'));
			}
		}
		$rols = $this->DoctorSpecialty->Rol->find('list');
		$specialties = $this->DoctorSpecialty->Specialtie->find('list');
		$this->set(compact('rols', 'specialties'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DoctorSpecialty->exists($id)) {
			throw new NotFoundException(__('Invalid doctor specialty'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DoctorSpecialty->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor specialty has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor specialty could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DoctorSpecialty.' . $this->DoctorSpecialty->primaryKey => $id));
			$this->request->data = $this->DoctorSpecialty->find('first', $options);
		}
		$rols = $this->DoctorSpecialty->Rol->find('list');
		$specialties = $this->DoctorSpecialty->Specialtie->find('list');
		$this->set(compact('rols', 'specialties'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DoctorSpecialty->id = $id;
		if (!$this->DoctorSpecialty->exists()) {
			throw new NotFoundException(__('Invalid doctor specialty'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DoctorSpecialty->delete()) {
			$this->Session->setFlash(__('The doctor specialty has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doctor specialty could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
