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
 * Histories Controller
 *
 * @property History $History
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HistoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
 	public $helpers = array('Html','Form','Time','Js');
	public $components = array('Paginator', 'Session','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->History->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('histories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->History->exists($id)) {
			throw new NotFoundException(__('Historia No Existe'));
		}
		$options = array('conditions' => array('History.' . $this->History->primaryKey => $id));
		$this->set('history', $this->History->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */

	public function add() {
		if ($this->request->is('post')) {
			$this->History->create();
			if ($this->History->save($this->request->data)) {
				$this->History->getLastInsertId();
				$this->Session->setFlash(__('El Numero de Historia ha sido asignado Correctamente'), 'flash/success');
				$this->redirect(array('controller'=>'antecedents','action' => 'add'));
			} else {
				$this->Session->setFlash(__('El Numero de Historia no ha sido asignado, Verifique e Intente de Nuevo.'), 'flash/error');
			}
		}
		$people = $this->History->Person->find('list',array('order'=>'id DESC'));
		$this->set(compact('people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->History->id = $id;
		if (!$this->History->exists($id)) {
			throw new NotFoundException(__('La Historia No Existe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->History->save($this->request->data)) {
				$this->Session->setFlash(__('El Numero de Historia ha sido modificado Correctamente'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Numero de Historia no ha sido editado.Por Favor, Intente Nuevamente .'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('History.' . $this->History->primaryKey => $id));
			$this->request->data = $this->History->find('first', $options);
		}
		$people = $this->History->Person->find('list');
		$antecedents = $this->History->Antecedent->find('list');
		$this->set(compact('people', 'antecedents'));
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
		$this->History->id = $id;
		if (!$this->History->exists()) {
			throw new NotFoundException(__('La Historia no Existe'));
		}
		if ($this->History->delete()) {
			$this->Session->setFlash(__('La Historia ha sido eliminada con exito'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('La Historia fue eliminada'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
