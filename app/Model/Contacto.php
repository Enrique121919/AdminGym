<?php
class Contacto extends AppModel{

	public $useTable = false;


	public function send($d){
		App::uses('CakeEmail','Network/Email');
		$email = new CakeEmail();
		$email->to('info@admingyms.com')
		      ->from('info@admingyms.com')
		      ->subject('Contactos : ')
		      ->emailFormat('html')
		      ->template('contacto')->viewVars($d);
		return $email->send('Su mensaje fue enviado');
	}

}