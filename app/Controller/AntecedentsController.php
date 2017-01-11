<?php
App::uses('AppController', 'Controller');
/**
 * Antecedents Controller
 *
 * @property Antecedent $Antecedent
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AntecedentsController extends AppController {

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
		$this->Antecedent->recursive = 0;
		$this->set('antecedents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Antecedent->exists($id)) {
			throw new NotFoundException(__('El antecedente no existe'));
		}
		$options = array('conditions' => array('Antecedent.' . $this->Antecedent->primaryKey => $id));
		$this->set('antecedent', $this->Antecedent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Antecedent->create();
			if ($this->Antecedent->save($this->request->data)) {
				$this->Session->setFlash(__('El antecedente ha sido guardado'), 'flash/success');
				$this->redirect(array('controller'=>'diagnostics','action' => 'add'));
			} else {
				$this->Session->setFlash(__('El antecedente no ha sido guardado, Por Favor, Intente de Nuevo'), 'flash/error');
			}
		}
		$people = $this->Antecedent->Person->find('list',array('order'=>'full_name DESC'));
		$histories = $this->Antecedent->History->find('list',array('order'=> 'id DESC'));
		$this->set(compact('people', 'histories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Antecedent->id = $id;
		if (!$this->Antecedent->exists($id)) {
			throw new NotFoundException(__('El antedecente no existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Antecedent->save($this->request->data)) {
				$this->Session->setFlash(__('El antecedente ha sido actualizado'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El antecedente no ha sido actualizado, por favor intente de nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Antecedent.' . $this->Antecedent->primaryKey => $id));
			$this->request->data = $this->Antecedent->find('first', $options);
		}
		$people = $this->Antecedent->Person->find('list');
		$histories = $this->Antecedent->History->find('list');
		$this->set(compact('people', 'histories'));
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
		$this->Antecedent->id = $id;
		if (!$this->Antecedent->exists()) {
			throw new NotFoundException(__('EL antecedente no existe'));
		}
		if ($this->Antecedent->delete()) {
			$this->Session->setFlash(__('El antecedente eliminado'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El antecedente no ha sido eliminado, Por Favor, Intente de Nuevo.'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
