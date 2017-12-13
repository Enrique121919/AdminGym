<?php
/**
* 
*/
class ContactoController  extends AppController{

	function index(){
		if($this->request->is('post')){
			$this->Contacto->send($this->request->data['Contacto']);
		}

	}

}