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

public $Components=array('Email');

function send(){
	$emailValues=array('nombre'=>'MiNombre','email'=>'MiEmail');
	$this->set('emailValues',$emailValues);
	$this->Email->to = 'info@admingyms.com';

	$this->Email->subject = 'Informacioón';
	$this->Email->replyTo = 'reply@addres.com';

	$this->Email->from = 'AdminGyms<info@admingyms.com>';
	$this->Email->template = 'sample';

	$this->Email->sendAs = 'html';
	if ($this->Email->send()) {

		//Mensaje envado//
	}
}