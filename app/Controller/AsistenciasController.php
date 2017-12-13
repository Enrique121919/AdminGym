<?php
App::uses('AppController', 'Controller');
/**
 * Asistencias Controller
 *
 * @property Asistencia $Asistencia
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AsistenciasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function beforeRender() {
		parent::beforeRender();

		$this->layout = 'admin';
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Asistencia->recursive = 0;
		$this->set('asistencias', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Asistencia->exists($id)) {
			throw new NotFoundException(__('Invalid asistencia'));
		}
		$options = array('conditions' => array('Asistencia.' . $this->Asistencia->primaryKey => $id));
		$this->set('asistencia', $this->Asistencia->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Asistencia->create();
			if ($this->Asistencia->save($this->request->data)) {
				$this->Flash->success(__('The asistencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The asistencia could not be saved. Please, try again.'));
			}
		}
		$miembros = $this->Asistencia->Miembro->find('list');
		$this->set(compact('miembros'));
	}
}
