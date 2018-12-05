<?php 
/**
 * 
 */
class User extends CI_Model
{
    
    function getUser($email=''){
       $result =$this->db->query("SELECT * FROM user WHERE email = '".$email."' LIMIT 1 ");
        
        if($result->num_rows()>0){
        return $result->row();
        }
        else{
            return null;
        }
    }


}
?>
