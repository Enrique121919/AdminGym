<?php
App::uses('AppController', 'Controller');
/**
 * Cursos Controller
 *
 * @property Curso $Curso
 * @property PaginatorComponent $Paginator
 */
class CursosController extends AppController {

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
		$this->Curso->recursive = 2;
		$this->set('cursos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Curso->exists($id)) {
			throw new NotFoundException(__('Invalid curso'));
		}
		$options = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $id));
		$this->set('curso', $this->Curso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Curso->create();
			if ($this->Curso->save($this->request->data)) {
				$this->Flash->success(__('The curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curso could not be saved. Please, try again.'));
			}
		}
		$clases = $this->Curso->Clase->find('list');
		$miembros = $this->Curso->Miembro->find('list');
		$this->set(compact('clases', 'miembros'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Curso->exists($id)) {
			throw new NotFoundException(__('Invalid curso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Curso->save($this->request->data)) {
				$this->Flash->success(__('The curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The curso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $id));
			$this->request->data = $this->Curso->find('first', $options);
		}
		$clases = $this->Curso->Clase->find('list');
		$miembros = $this->Curso->Miembro->find('list');
		$this->set(compact('clases', 'miembros'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Curso->delete()) {
			$this->Flash->success(__('The curso has been deleted.'));
		} else {
			$this->Flash->error(__('The curso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
