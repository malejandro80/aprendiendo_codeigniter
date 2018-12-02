<?php 
 /**
  * 
  */
 class Article extends CI_controller
 {
     public function post($id=''){

        $fila =$this->post->getPostByName($id);

        $data= array('titulo'=> $fila->post);
        $this->load->view("/template/head",$data);
        
        $data = array('usuario'=> 'miguel');
        $this->load->view("/template/nav", $data);

        $data = array('post'        => $fila->post, 
                      'descripcion' => $fila->descripcion);
        $this->load->view("/template/header", $data);
        
        $data= array('contenido'=> $fila->contenido);
        $this->load->view("/template/post", $data);
        
        $this->load->view("/template/footer");
        


     }
    
 }

 ?>