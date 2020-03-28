
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

    public function send_email($email){
        // $config= $this->load->config('email');

        $config = array(
            'protocol' => 'sendmail', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'smtp.googlemail.com', 
            'smtp_port' => 465,
            'smtp_user' => 'daramolaadekunle15@gmail.com',
            'smtp_pass' => 'emmanuel1992',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'mailtype' => 'html', //plaintext 'text' mails or 'html'
            'newline'=>'\r\n',
            'smtp_timeout' => '4', //in seconds
            'charset' => 'utf-8',
            'wordwrap' => TRUE
        );

        $data = array(

            'username'=>$this->input->post('username'),
             'email_address'=>$this->input->post('email_address'),
    
   
           );
        $this->load->library('email');
        $this->email->initialize($config);
        $from = $this->config->item('smtp_user');
        $to = $email;
        // $subjuct=""
        $body= $this->load->view('admissions/signupemail', $data,TRUE);

        // $this->email->subject('Password reset request');
        // $mail_message = 'Dear ' . $email . ',' . "<br>\r\n";
        // $mail_message .= 'Thank you for starting your application,<br> Click On Link And Reset Password:<b><a href="http://www.ciadmin.local/welcome/update_password">Reset Password</a></b>'."\r\n";
        // $mail_message .= '<br>Please Update your password.';
        // $mail_message .= '<br>Thanks & Regards';
        // $mail_message .= '<br>Red Feather Software';
        // $this->$this->load->library('email');
        
        $this->email->from('daramolaadekunle15@gmail.com');
        $this->email->to($email);
        // $this->email->cc('another@example.com');
        // $this->email->bcc('and@another.com');
        
        $this->email->subject('Application');
        $this->email->message($body);
        
        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
        
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

   // check for registration id
   public function check_regist_exist($id){
       $query = $this->db->get_where('admission_biodata', array('application_registration_id'=>$id));
       if(empty($query->row_array())){
           return true;
       }
       else{
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

    public function create_student_biodata($reg_id){

        $data = array(

           'surname'=>$this->input->post('surname'),
           'firstname'=>$this->input->post('firstname'),
           'othername'=>$this->input->post('othername'),
           'religion'=>$this->input->post('religion'),
           'dob'=>$this->input->post('age'),
           'application_registration_id'=>$reg_id,
           'genotype'=>$this->input->post('genotype'),
           'bloodgroup'=>$this->input->post('bloodgroup'),
           'physicalhealthissue'=>$this->input->post('healthissue'),
           'primaryschool'=>$this->input->post('primaryschool'),
           'startdateprimary'=>$this->input->post('startdate'),
           'enddateprimary'=>$this->input->post('enddate'),
           'secondaryschool'=>$this->input->post('secondary'),
           'startdatesecondary'=>$this->input->post('startdatesecondary'),
           'enddatesecondary'=>$this->input->post('enddatesecondary'),
           'churchname'=>$this->input->post('church'),
           'churchdenomination'=>$this->input->post('churchdenomiation'),
           'pastorname'=>$this->input->post('pastorname'),
           'parent'=>$this->input->post('parentname'),
           'residence'=>$this->input->post('parentresidence'),
           'mailaddress'=>$this->input->post('parentmaill'),
           'profession'=>$this->input->post('parentprofession'),
           'phonenumber'=>$this->input->post('parentphone'),
           'email'=>$this->input->post('parentemail'),
           

        );

        return $this->db->insert('admission_biodata',$data); 

    }
}