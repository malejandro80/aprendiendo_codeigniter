<?php 
    class profile extends CI_controller
    {
       
         function index()
        {

                $data =array('titulo' => 'Home', 'mensaje'=>'blog universal');
                $this->load->view("/template/head", $data);

                $data =array('usuario' => $this->session->userdata('usuario'));
                $this->load->view("/template/nav", $data);

                $data = array('post'=>'blog','descripcion'=>'blog hecho con codeinigter');
                $this->load->view("/user/user_header",$data);



                $this->load->view("/template/footer");
    
        }

    }
 ?>