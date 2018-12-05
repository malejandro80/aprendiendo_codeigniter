<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_controller{

	public function index(){
        
                $data =array('titulo' => 'Home', 'mensaje'=>'blog universal');
                $this->load->view("/template/head", $data);

                $data =array('usuario' => 'miguel');
                $this->load->view("/template/nav", $data);

                $data = array('post'=>'blog','descripcion'=>'blog hecho con codeinigter');
                $this->load->view("/template/header",$data);


                $result = $this->post->getPost();

                $data = array('consulta'=>$result);
                $this->load->view("/template/content",$data);

                $this->load->view("/template/footer");
	
	}
}
