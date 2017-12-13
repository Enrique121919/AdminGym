<?php
App::uses('AppController', 'Controller');
/**
 * Miembros Controller
 *
 * @property Miembro $Miembro
 * @property PaginatorComponent $Paginator
 */
class MiembrosController extends AppController {


	public function beforeRender() {
	    parent::beforeRender();

	    $this->layout = 'admin';
	}
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Miembro->recursive = 3;
		$this->set('miembros', $this->Paginator->paginate());
	}

	
	public function admin_asignar() {

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Miembro->exists($id)) {
			throw new NotFoundException(__('Invalid miembro'));
		}
		$options = array('conditions' => array('Miembro.' . $this->Miembro->primaryKey => $id));
		$this->set('miembro', $this->Miembro->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Miembro->create();
			if ($this->Miembro->save($this->request->data)) {
				$this->Flash->success(__('The miembro has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The miembro could not be saved. Please, try again.'));
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
	public function admin_edit($id = null) {
		if (!$this->Miembro->exists($id)) {
			throw new NotFoundException(__('Invalid miembro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Miembro->save($this->request->data)) {
				$this->Flash->success(__('El miembro a sido guardado exitosmente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El miembro could no puede ser guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Miembro.' . $this->Miembro->primaryKey => $id));
			$this->request->data = $this->Miembro->find('first', $options);
		}
	}

	public function admin_renovar(){
	
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Miembro->id = $id;
		if (!$this->Miembro->exists()) {
			throw new NotFoundException(__('Miembro invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Miembro->delete()) {
			$this->Flash->success(__('El miembro a sido eliminado.'));
		} else {
			$this->Flash->error(__('The miembro could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
