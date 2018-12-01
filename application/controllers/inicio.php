<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_controller{

		public function index(){
		$data = array('titulo' => 'saludos', 'mensaje' => 'fuck you');
		$this->load->view("inicio",$data);
			
	}

	public function link(){
		
		echo 'presionaste el link';	
	}
}
