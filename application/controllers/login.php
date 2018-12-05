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

            if($fila != null){
                if($fila->password == $password)
                {
                     
                    $data = array('user'               => $email,
                                   'session_condition' => true, 
                                   'user_name'         => $fila->user_name
                                  );
                    $this->session->set_userdata($data);
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