<?php
App::uses('AppController', 'Controller');
/**
 * Empleados Controller
 *
 * @property Empleado $Empleado
 * @property PaginatorComponent $Paginator
 */
class EmpleadosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		parent::beforeFilter();

		$this->Auth->allow('admin_add');

	}

	public function admin_login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectURL());
			}
			$this->Flash->error(
           		 __('Username or password is incorrect')
        	);
		}
	}

	public function admin_logout() {
		return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout = 'admin';
		$this->Empleado->recursive = 0;
		$this->set('empleados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Empleado->exists($id)) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		$options = array('conditions' => array('Empleado.' . $this->Empleado->primaryKey => $id));
		$this->set('empleado', $this->Empleado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Empleado->create();
			if ($this->Empleado->save($this->request->data)) {
				$this->Flash->success(__('The empleado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empleado could not be saved. Please, try again.'));
			}
		}
		$tipos = $this->Empleado->Tipo->find('list', array('fields' => array('id', 'nombre_tipo')));
		$this->set(compact('tipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Empleado->exists($id)) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empleado->save($this->request->data)) {
				$this->Flash->success(__('The empleado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The empleado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Empleado.' . $this->Empleado->primaryKey => $id));
			$this->request->data = $this->Empleado->find('first', $options);
		}
		$tipos = $this->Empleado->Tipo->find('list', array('fields' => array('id', 'nombre_tipo')));
		$this->set(compact('tipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Empleado->id = $id;
		if (!$this->Empleado->exists()) {
			throw new NotFoundException(__('Invalid empleado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Empleado->delete()) {
			$this->Flash->success(__('The empleado has been deleted.'));
		} else {
			$this->Flash->error(__('The empleado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
