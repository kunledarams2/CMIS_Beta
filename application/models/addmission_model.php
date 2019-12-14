
<?php

class addmission_model extends CI_Model{


    public function __construct()
    {
        $this->load->database();
    }

    public function create_account($enc_password){


        $data = array(

         'username'=>$this->input->post('username'),
          'email_address'=>$this->input->post('email_address'),
          'password'=>$enc_password,

        );

        return $this->db->insert('admission_create_account',$data); 

    }

    // check username exist
    public function check_username_exists($username){
         $query = $this->db->get_where('admission_create_account', array('username'=>$username)); 
         if(empty($query->row_array())){
             return true;
         } else{
             return false;
         }
    }

    // check username exist
    public function check_email_exists($email){
        $query = $this->db->get_where('admission_create_account', array('email_address'=>$email)); 
        if(empty($query->row_array())){
            return true;
        } else{
            return false;
        }
   }

    public function login_info(){

    }
}