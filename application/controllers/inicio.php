<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_controller{

		public function index(){
		$data = array('titulo' => 'saludos', 'mensaje' => 'fuck you');
        $this->load->view("/template/head");
        $this->load->view("/template/nav");
        $this->load->view("/template/header");
        $this->load->view("/template/content");
        $this->load->view("/template/footer");
		//$this->load->view("inicio",$data);
			
	}
}
