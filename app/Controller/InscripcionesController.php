<?php
App::uses('AppController', 'Controller');
/**
 * Inscripciones Controller
 *
 * @property Inscripcion $Inscripcion
 * @property PaginatorComponent $Paginator
 */
class InscripcionesController extends AppController {


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
		$this->Inscripcion->recursive = 2;
		$this->set('inscripciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Inscripcion->exists($id)) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		$options = array('conditions' => array('Inscripcion.' . $this->Inscripcion->primaryKey => $id));
		$this->set('inscripcion', $this->Inscripcion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Inscripcion->create();
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Flash->success(__('The inscripcion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The inscripcion could not be saved. Please, try again.'));
			}
		}
		$miembros = $this->Inscripcion->Miembro->find('list');
		$paquetes = $this->Inscripcion->Paquete->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list');
		$this->set(compact('miembros', 'paquetes', 'empleados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Inscripcion->exists($id)) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Flash->success(__('The inscripcion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The inscripcion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inscripcion.' . $this->Inscripcion->primaryKey => $id));
			$this->request->data = $this->Inscripcion->find('first', $options);
		}
		$miembros = $this->Inscripcion->Miembro->find('list');
		$paquetes = $this->Inscripcion->Paquete->find('list');
		$empleados = $this->Inscripcion->Empleado->find('list');
		$this->set(compact('miembros', 'paquetes', 'empleados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inscripcion->delete()) {
			$this->Flash->success(__('The inscripcion has been deleted.'));
		} else {
			$this->Flash->error(__('The inscripcion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_asignar() {

	}

	
	public function admin_renovar() {

	}
}
