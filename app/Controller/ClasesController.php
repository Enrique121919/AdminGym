<?php
App::uses('AppController', 'Controller');
/**
 * Clases Controller
 *
 * @property Clase $Clase
 * @property PaginatorComponent $Paginator
 */
class ClasesController extends AppController {

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
		$this->Clase->recursive = 0;
		$this->set('clases', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Clase->exists($id)) {
			throw new NotFoundException(__('Invalid clase'));
		}
		$options = array('conditions' => array('Clase.' . $this->Clase->primaryKey => $id));
		$this->set('clase', $this->Clase->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Clase->create();
			if ($this->Clase->save($this->request->data)) {
				$this->Flash->success(__('The clase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The clase could not be saved. Please, try again.'));
			}
		}
		$instructores = $this->Clase->Instructor->find('list');
		$this->set(compact('instructores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Clase->exists($id)) {
			throw new NotFoundException(__('Invalid clase'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Clase->save($this->request->data)) {
				$this->Flash->success(__('The clase has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The clase could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Clase.' . $this->Clase->primaryKey => $id));
			$this->request->data = $this->Clase->find('first', $options);
		}
		$instructores = $this->Clase->Instructor->find('list');
		$this->set(compact('instructores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Clase->id = $id;
		if (!$this->Clase->exists()) {
			throw new NotFoundException(__('Invalid clase'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Clase->delete()) {
			$this->Flash->success(__('The clase has been deleted.'));
		} else {
			$this->Flash->error(__('The clase could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
