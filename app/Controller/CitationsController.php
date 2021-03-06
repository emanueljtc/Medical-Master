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
			throw new NotFoundException(__('La Cita no existe'));
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
				$this->Session->setFlash(__('La cita ha sido agendada correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cita no ha sido agendada. Verifique Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->Citation->Person->find('list',array('order'=>'id DESC'));
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
			throw new NotFoundException(__('La cita no existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Citation->save($this->request->data)) {
				$this->Session->setFlash(__('La cita agendada ha sido modificada correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La cita agendada no ha sido modificada. Verifique e Intente de Nuevo'), 'flash/error');
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
			throw new NotFoundException(__('La cita no existe'));
		}
		if ($this->Citation->delete()) {
			$this->Session->setFlash(__('La cita ha sido eliminada correctamente'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('La cita no ha sido eliminada'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
