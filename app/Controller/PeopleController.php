<?php
App::uses('AppController', 'Controller');


/**
 * People Controller
 *
 * @property Person $Person
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PeopleController extends AppController {
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
		$this->Person->recursive = 0;
		$this->set('people', $this->paginate());
		$this->set('personas',$this->Person->find('all'));
   		$this->set('_serialize', array('personas'));

		$this->set('people', $this->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Paciente no Existente'));
		}
		$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
		$this->set('person', $this->Person->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('El Paciente ha sido Registrado correctamente'), 'flash/success');
				$this->redirect(array('controller' => 'histories','action' => 'add'));
			} else {
				$this->Session->setFlash(__('el Paciente No ha sido registrado. Verifique e Intente de Nuevo.'), 'flash/error');
			}
		}
		$nationalities = $this->Person->Nationality->find('list');
		$this->set(compact('nationalities'));
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Person->id = $id;
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Paciente no Existente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('El Paciente ha sido actualizado correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Paciente no ha sido actualizado. Verifique e Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
			$this->request->data = $this->Person->find('first', $options);
		}
		$nationalities = $this->Person->Nationality->find('list');
		$this->set(compact('nationalities'));
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
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Paciente No Existente'));
		}
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('El Paciente ha sido Eliminado correctamente'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('el Paciente no ha sido Eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}

}
