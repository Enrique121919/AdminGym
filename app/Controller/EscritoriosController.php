<?php
class EscritoriosController extends AppController {
	public $helpers = array('Html', 'Form');

	public $uses = array('Inscripcion');

	public function beforeRender() {
		parent::beforeRender();

		$this->layout = 'admin';
	}
	public function admin_index() {

		$this->Inscripcion->recursive = 3;
		$this->Inscripcion->Miembro->recursive = 0;

		$miembros = $this->Inscripcion->Miembro->find('all', array('order' => array('Miembro.id DESC')));
		$this->set('miembros', $miembros);

		$this->Inscripcion->Miembro->Curso->Clase->recursive = 0;
		$clases = $this->Inscripcion->Miembro->Curso->Clase->find('all');
		$this->set('clases', $clases);


		$paquetes = $this->Inscripcion->Paquete->find('all');
		$this->set('paquetes', $paquetes);

		$this->Inscripcion->recursive = 1;
		$this->set('inscripciones', $this->Inscripcion->find('all'));
	}

	public function admin_check_list(){
		$this->Inscripcion->recursive = 1;
		$this->set('check_list', $this->Inscripcion->find('all'));
	}
}
?>
