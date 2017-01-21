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
		$this->set('specialties', $this->paginate());
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
			throw new NotFoundException(__('La especialidad no existe'));
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
				$this->Session->setFlash(__('La especialidad ha sido guardada'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La especialidad no ha sido guardada. Por Favor, Intente de Nuevo.'), 'flash/error');
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
        $this->Specialty->id = $id;
		if (!$this->Specialty->exists($id)) {
			throw new NotFoundException(__('La especialidad no existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Specialty->save($this->request->data)) {
				$this->Session->setFlash(__('La especialidad ha sido actualizada'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La especialidad no ha sido actualizada. Por Favor, Intente de Nuevo'), 'flash/error');
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
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Specialty->id = $id;
		if (!$this->Specialty->exists()) {
			throw new NotFoundException(__('La especialidad no existe'));
		}
		if ($this->Specialty->delete()) {
			$this->Session->setFlash(__('La especialidad ha sido eliminada'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('La especialidad no ha sido eliminada. Por Favor, Intente de Nuevo'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
