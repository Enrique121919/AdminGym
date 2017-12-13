<?php
App::uses('AppController', 'Controller');
/**
 * Instructores Controller
 *
 * @property Instructor $Instructor
 * @property PaginatorComponent $Paginator
 */
class InstructoresController extends AppController {


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
		$this->Instructor->recursive = 0;
		$this->set('instructores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Instructor->exists($id)) {
			throw new NotFoundException(__('Invalid instructor'));
		}
		$options = array('conditions' => array('Instructor.' . $this->Instructor->primaryKey => $id));
		$this->set('instructor', $this->Instructor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Instructor->create();
			if ($this->Instructor->save($this->request->data)) {
				$this->Flash->success(__('The instructor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The instructor could not be saved. Please, try again.'));
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
		if (!$this->Instructor->exists($id)) {
			throw new NotFoundException(__('Invalid instructor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Instructor->save($this->request->data)) {
				$this->Flash->success(__('The instructor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The instructor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instructor.' . $this->Instructor->primaryKey => $id));
			$this->request->data = $this->Instructor->find('first', $options);
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
		$this->Instructor->id = $id;
		if (!$this->Instructor->exists()) {
			throw new NotFoundException(__('Invalid instructor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Instructor->delete()) {
			$this->Flash->success(__('The instructor has been deleted.'));
		} else {
			$this->Flash->error(__('The instructor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
