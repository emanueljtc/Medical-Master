<?php
App::uses('AppController', 'Controller');
/**
 * AntecedentsGinecologycals Controller
 *
 * @property AntecedentsGinecologycal $AntecedentsGinecologycal
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AntecedentsGinecologycalsController extends AppController {

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
		$this->AntecedentsGinecologycal->recursive = 0;
		$this->set('antecedentsGinecologycals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AntecedentsGinecologycal->exists($id)) {
			throw new NotFoundException(__('Antecedente Ginecologico Invalido'));
		}
		$options = array('conditions' => array('AntecedentsGinecologycal.' . $this->AntecedentsGinecologycal->primaryKey => $id));
		$this->set('antecedentsGinecologycal', $this->AntecedentsGinecologycal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AntecedentsGinecologycal->create();
			if ($this->AntecedentsGinecologycal->save($this->request->data)) {
				$this->Session->setFlash(__('El antecedente fue registrado correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Antecedente no fue registrado, Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->AntecedentsGinecologycal->Person->find('list',array('order'=>'id DESC'));
		$histories = $this->AntecedentsGinecologycal->History->find('list',array('order'=> 'id DESC'));
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
        $this->AntecedentsGinecologycal->id = $id;
		if (!$this->AntecedentsGinecologycal->exists($id)) {
			throw new NotFoundException(__('Antecedente Ginecologico Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AntecedentsGinecologycal->save($this->request->data)) {
				$this->Session->setFlash(__('El Antecedente fue actualizado correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Antecedente no fue actualizado, Intente de Nuevo'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('AntecedentsGinecologycal.' . $this->AntecedentsGinecologycal->primaryKey => $id));
			$this->request->data = $this->AntecedentsGinecologycal->find('first', $options);
		}
		$people = $this->AntecedentsGinecologycal->Person->find('list',array('order'=>'id DESC'));
		$histories = $this->AntecedentsGinecologycal->History->find('list',array('order'=> 'id DESC'));
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
		$this->AntecedentsGinecologycal->id = $id;
		if (!$this->AntecedentsGinecologycal->exists()) {
			throw new NotFoundException(__('Antecedente Ginecologico Invalido'));
		}
		if ($this->AntecedentsGinecologycal->delete()) {
			$this->Session->setFlash(__('El Antecedente ha sido eliminado correctamente'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Antecedente no ha sido eliminado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
