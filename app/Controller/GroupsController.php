<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 * @property yComponent $y
 * @property SessionComponent $Session
 */
class GroupsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
 	public $helpers = array('Html','Form','Time','Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','RequestHandler');

/**
 * index method
 *
 * @return void
 */
		 public function beforeFilter() {
		    parent::beforeFilter();

		      // For CakePHP 2.1 and up
		    $this->Auth->allow();
		}
	public function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Grupo no Existe'));
		}
		$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
		$this->set('group', $this->Group->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('El Grupo ha sido registrado correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Grupo no ha sido registrado, Verifique e Intente de Nuevo'), 'flash/error');
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
        $this->Group->id = $id;
		if (!$this->Group->exists($id)) {
			throw new NotFoundException(__('Grupo no existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('El grupo ha sido actualizado correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Grupo no ha sido actualizado, Verifique e Intente de Nuevo'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
			$this->request->data = $this->Group->find('first', $options);
		}
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
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Grupo No Existe'));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('El Grupo ha sido Eliminado correctamente'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Grupo no ha sido eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}

}
