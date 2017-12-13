<?php
App::uses('AppController', 'Controller');
/**
 * Paquetes Controller
 *
 * @property Paquete $Paquete
 * @property PaginatorComponent $Paginator
 */
class PaquetesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');


	public function beforeRender() {
	    parent::beforeRender();

	    $this->layout = 'admin';
	}
/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Paquete->recursive = 0;
		$this->set('paquetes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Paquete->exists($id)) {
			throw new NotFoundException(__('Invalid paquete'));
		}
		$options = array('conditions' => array('Paquete.' . $this->Paquete->primaryKey => $id));
		$this->set('paquete', $this->Paquete->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Paquete->create();
			if ($this->Paquete->save($this->request->data)) {
				$this->Flash->success(__('The paquete has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paquete could not be saved. Please, try again.'));
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
		if (!$this->Paquete->exists($id)) {
			throw new NotFoundException(__('Invalid paquete'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paquete->save($this->request->data)) {
				$this->Flash->success(__('The paquete has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The paquete could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paquete.' . $this->Paquete->primaryKey => $id));
			$this->request->data = $this->Paquete->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Paquete->id = $id;
		if (!$this->Paquete->exists()) {
			throw new NotFoundException(__('Invalid paquete'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paquete->delete()) {
			$this->Flash->success(__('The paquete has been deleted.'));
		} else {
			$this->Flash->error(__('The paquete could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

