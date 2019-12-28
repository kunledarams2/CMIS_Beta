
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

    public function login_info($username, $password){
        
        // Validate
         $this->db->where('username', $username);
         $this->db->where('password', $password);

         $result = $this->db->get('admission_create_account');
        //  die($result->row(0)->id);

        if($result->num_rows()==1){
            return $result->row(0)->id;
        }else{
            return false;
        }

    }

    public function create_student_biodata(){

        $data = array(

           'surname'=>$this->input->post('surname'),
           'firstname'=>$this->input->post('firstname'),
           'othername'=>$this->input->post('othername'),
           'religion'=>$this->input->post('religion'),
           'age'=>$this->input->post('age'),

        );

        return $this->db->insert('admission_biodata',$data); 

    }
}