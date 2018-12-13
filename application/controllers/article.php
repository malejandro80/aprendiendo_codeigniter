  <?php 
 /**
  * 
  */
 class Article extends CI_controller
 {
      function __construct()
     {
       parent::__construct();
       $this->load->model('post');
     }

     public function post($id=''){

        $fila =$this->post->getPostById($id);

        $data= array('titulo'=> $fila->post);
        $this->load->view("/template/head",$data);
        
        $data =array('usuario' => $this->session->userdata('usuario'));
        $this->load->view("/template/nav", $data);

        $data = array('post'        => $fila->post, 
                      'descripcion' => $fila->descripcion);
        $this->load->view("/template/header", $data);
        
        $data= array('contenido'=> $fila->contenido);
        $this->load->view("/template/post", $data);
        
        $this->load->view("/template/footer");
        


     }

       function guardar_articulo()
        {
                //  $this->load->model('post');

                if($this->input->post())
                {
                    $data = array('autor'        => $this->session->userdata('usuario') ,
                                   'post'        => $this->input->post('post'),
                                   'descripcion' => $this->input->post('descripcion'),
                                   'contenido'   => $this->input->post('contenido'),
                                   'fecha'       => date('Y-m-d')
                                 );
                    
                    $this->post->guardar_post($data);
                    redirect(base_url("profile"), "refresh");
                }
                // header("location: " . base_url() . "login/usuario". $this->session->getdate('usuario'));
        } 
        function validar($campos){
          $this->form_validation->set_rules('titulo', 'Título', 'required');
        }
    
 }

 ?>