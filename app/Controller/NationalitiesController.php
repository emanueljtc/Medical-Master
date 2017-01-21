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
 * Nationalities Controller
 *
 * @property Nationality $Nationality
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NationalitiesController extends AppController {

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
		$this->Nationality->recursive = 0;
		$this->set('nationalities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nationality->exists($id)) {
			throw new NotFoundException(__('Nacionalidad no existe'));
		}
		$options = array('conditions' => array('Nationality.' . $this->Nationality->primaryKey => $id));
		$this->set('nationality', $this->Nationality->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nationality->create();
			if ($this->Nationality->save($this->request->data)) {
				$this->Session->setFlash(__('La nacionalidad ha sido guardada.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La nacionalidad no ha sido guardada. Por Favor, Intente de Nuevo.'));
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
		if (!$this->Nationality->exists($id)) {
			throw new NotFoundException(__('Nacionalidad no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nationality->save($this->request->data)) {
				$this->Session->setFlash(__('La nacionalidad ha sido guardada.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La nacionalidad no ha sido guardada. Por Favor, Intente de Nuevo.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Nationality.' . $this->Nationality->primaryKey => $id));
			$this->request->data = $this->Nationality->find('first', $options);
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
		$this->Nationality->id = $id;
		if (!$this->Nationality->exists()) {
			throw new NotFoundException(__('La nacionalidad no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Nationality->delete()) {
			$this->Session->setFlash(__('La nacionalidad ha sido eliminada.'), 'flash/succes');
		} else {
			$this->Session->setFlash(__('La nacionalidad no ha sido eliminada. Por Favor, Intente de Nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
