<!-- MEDICAL_MASTER
Software Medico Asistencial
Sistema de Información: Desarrollado en CAKEPHP 2.6
Aplicativo Movil: Desarrollado en IONIC 2
Licencia Privativa.
Desarrolladores:
Ing. Guillermo Ochoa Torres
Ing. Emanuel Torres Clemente
Lugar: Maracay - Estado Aragua - Venezuela
Version: 1.1
Año: 2016 - 2017 -->
<?php
App::uses('AppController', 'Controller');
/**
 * Diagnostics Controller
 *
 * @property Diagnostic $Diagnostic
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DiagnosticsController extends AppController {

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
		$this->Diagnostic->recursive = 0;
		$this->set('diagnostics', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Diagnostic->exists($id)) {
			throw new NotFoundException(__('Diagnostico Invalido'));
		}
		$options = array('conditions' => array('Diagnostic.' . $this->Diagnostic->primaryKey => $id));
		$this->set('diagnostic', $this->Diagnostic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diagnostic->create();
			if ($this->Diagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('El Diagnostico ha sido registrado Correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Diagnostico no ha sido registrado, Verifique e Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->Diagnostic->Person->find('list',array('order'=>'id DESC'));
		$histories = $this->Diagnostic->History->find('list',array('order'=>'id DESC'));
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
        $this->Diagnostic->id = $id;
		if (!$this->Diagnostic->exists($id)) {
			throw new NotFoundException(__('Diagnostico Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Diagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('El Diagnostico ha sido actualizado Correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Diagnostico no ha sido actualizado, Verifique e Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Diagnostic.' . $this->Diagnostic->primaryKey => $id));
			$this->request->data = $this->Diagnostic->find('first', $options);
		}
		$people = $this->Diagnostic->Person->find('list');
		$histories = $this->Diagnostic->History->find('list');
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
		$this->Diagnostic->id = $id;
		if (!$this->Diagnostic->exists()) {
			throw new NotFoundException(__('Diagnostico Invalido'));
		}
		if ($this->Diagnostic->delete()) {
			$this->Session->setFlash(__('El Diagnostico ha sido eliminado Correctamente'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El Diagnostico no ha sido actualizado'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
