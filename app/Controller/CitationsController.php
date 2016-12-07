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
		$this->set('citations', $this->paginate());
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
			throw new NotFoundException(__('Invalid citation'));
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
				$this->Session->setFlash(__('The citation has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The citation could not be saved. Please, try again.'), 'flash/error');
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
        $this->Citation->id = $id;
		if (!$this->Citation->exists($id)) {
			throw new NotFoundException(__('Invalid citation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Citation->save($this->request->data)) {
				$this->Session->setFlash(__('The citation has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The citation could not be saved. Please, try again.'), 'flash/error');
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
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Citation->id = $id;
		if (!$this->Citation->exists()) {
			throw new NotFoundException(__('Invalid citation'));
		}
		if ($this->Citation->delete()) {
			$this->Session->setFlash(__('Citation deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Citation was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
