<?php 
    /**
     * 
     */
    class Login extends CI_controller
    {
       
        function index(){

            

            $email = $this->input->post('user');
            $password = $this->input->post('password');
            
            $this->load->model('user');
            $fila = $this->user->getUser($email);
            //$perfil = $fila->user_name;
            

            if($fila != null){
                if($fila->password == $password)
                {
                     
                    $data = array('user'               => $email,
                                   'session_condition' => true,
                                   'usuario'           => $fila->user_name                      
                                  );

                    $this->session->set_userdata($data);
                    $this->load->view("/template/nav", $data);
                    header("location: " . base_url(). "inicio");

                }
                else
                {
                    header("location: " . base_url(). "inicio");
                    
                }                
            }
            else
            {
                header("location: " . base_url(). "inicio");                
            }
        }
       
        function logout(){
            $this->session->sess_destroy();
            header("location: " . base_url() . "inicio");            
        }   

    }
 ?>