<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
		 public function login() {
			 if ($this->request->is('post')) {
					 if ($this->Auth->login()) {
							 return $this->redirect($this->Auth->redirectUrl());
					 }
					 $this->Session->setFlash(__('Su Usuario o Contraseña es Incorrecta, Verifique e Intente de Nuevo.'), 'flash/error');
			 }
			}

			public function logout() {
			 //Leave empty for now.
			}
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	// 	public function beforeFilter() {
	//     parent::beforeFilter();
	//     // For CakePHP 2.1 and up
	//     $this->Auth->allow();
	// }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->User->id = $id;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('peligro','login','logout','add');
}
	//PARA ACTUALIZAR LOS PERMISOS DEBO RECORRER DESDE EL NAVEGADOR
	//ESTA FUNCION users/peligro
	public function peligro() {
    $group = $this->User->Group;

    // Acceso al grupo de administadores
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    // Acceso al Grupo de Secretari@s
    $group->id = 2;

    $this->Acl->deny($group, 'controllers');
		$this->Acl->deny($group, 'controllers/People/delete');
		$this->Acl->deny($group, 'controllers/Histories/delete');
		$this->Acl->allow($group, 'controllers/People/index');
		$this->Acl->allow($group, 'controllers/People/add');
		$this->Acl->allow($group, 'controllers/People/view');
		$this->Acl->allow($group, 'controllers/People/edit');
		$this->Acl->allow($group, 'controllers/Histories/index');
		$this->Acl->allow($group, 'controllers/Histories/add');
		$this->Acl->allow($group, 'controllers/Histories/view');
		$this->Acl->allow($group, 'controllers/Histories/edit');
		$this->Acl->allow($group, 'controllers/Citations/');
		$this->Acl->allow($group, 'controllers/Charges/');


    // Acceso a Doctores
    $group->id = 3;
    $this->Acl->deny($group, 'controllers');
		$this->Acl->deny($group, 'controllers/People/delete');
		$this->Acl->deny($group, 'controllers/Histories/delete');
		$this->Acl->deny($group, 'controllers/Antecedents/delete');
		$this->Acl->deny($group, 'controllers/Charges/');
		$this->Acl->allow($group, 'controllers/People/index');
		$this->Acl->allow($group, 'controllers/People/add');
		$this->Acl->allow($group, 'controllers/People/view');
		$this->Acl->allow($group, 'controllers/People/edit');
		$this->Acl->allow($group, 'controllers/Histories/index');
		$this->Acl->allow($group, 'controllers/Histories/add');
		$this->Acl->allow($group, 'controllers/Histories/view');
		$this->Acl->allow($group, 'controllers/Histories/edit');
		$this->Acl->allow($group, 'controllers/Antecedents/index');
		$this->Acl->allow($group, 'controllers/Antecedents/add');
		$this->Acl->allow($group, 'controllers/Antecedents/edit');
		$this->Acl->allow($group, 'controllers/Antecedents/view');
		$this->Acl->allow($group, 'controllers/Diagnostics');
		$this->Acl->allow($group, 'controllers/Treatments/');
		$this->Acl->allow($group, 'controllers/Indications/');
		$this->Acl->allow($group, 'controllers/Studies/');
		$this->Acl->allow($group, 'controllers/Citations/');
		$this->Acl->allow($group, 'controllers/Charges/index');
		$this->Acl->allow($group, 'controllers/Charges/view');


    // allow basic users to log out
    $this->Acl->allow($group, 'controllers/users/logout');

    // si muestra este mensaje  no hubo error en obtener los nuevos permisos
    echo "Permisos Concedidos";
    exit;
}
}
