
<?php
class Admissions extends CI_Controller{

  

    function createaccount(){
        $data['title'] = "Create Account";

        $this->form_validation->set_rules('email_address', 'Email Address', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');


        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('admissions/createaccount', $data);
            $this->load->view('templates/footer');
        }
        else{

            // encret password
            $enc_password= md5($this->input->post('password'));

            $this->addmission_model->create_account($enc_password);
            // flashing message before redirect
            $this->session->set_flashData('account_created', 'Your account is successfully created, You can now Log in');
            // die('continue');
            return redirect('admissions/login');
        }
        
    }

    // check username exist

    function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 
        'Username already exist, Please choose a different username');
        if($this->addmission_model->check_username_exists($username)){
            return true;
        }else {
            return false;
        }
    }

    // check email exist
    function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 
        'Email already exist, Please choose a different email');
        if($this->addmission_model->check_email_exists($email)){
            return true;
        }else {
            return false;
        }
    }


    function login(){

        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('username', 'Username', 'required');
        if($this->form_validation->run()===FALSE){

        $this->load->view('templates/header');
        $this->load->view('admissions/login', $data);
        $this->load->view('templates/footer');
        } else{

            
            // get login details

            // get username
            $username = $this->input->post('username');
            // get password and encryt it
            $password = md5( $this->input->post('password'));

            // user login
            $student_adm_Id= $this->addmission_model->login_info($username, $password);
            
            // do a check
            if($student_adm_Id){
                // $login_details=[
                //     'username'=>$username,
                //     'password'=>$password,
                //     'log_in'=>TRUE
                // ];
            
              $this->session->set_userdata('student_reg_id', $student_adm_Id);
              $id = $this->session->userdata('student_reg_id');
              if($this->addmission_model->check_regist_exist($id)){  // checking if registration id exist on the biodata table
                
                // $this->session->set_flashData('login_success',$id);
                return redirect('admissions/studentapplicationform');
              }else{
            
                return redirect('admissions/login');
              }
           

            } else{
            $this->session->set_flashData('login_error', 'Invalid login detail, Please enter correct surname and password');

                return redirect('admissions/login');
            }

            
        }
        
    }

    function studentapplicationform(){
        $data['title'] = "Biodata";

        $reg_id= $this->session->userdata('student_reg_id');


        if(!empty($reg_id)){
            $this->load->view('templates/header');
            $this->load->view('admissions/studentapplicationform', $data);
            $this->load->view('templates/footer');

            if($this->input->post('submit')){
               $this->addmission_model->create_student_biodata($reg_id);
                return redirect('admissions/applicationpaymentform');

            }

        }
        // if($this->input->post("submit")){
        //     $this->form_validation->set_rules('parent_name', 'Parent_Name', 'required');

        // }
        

        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');
        
       

        // if($this->form_validation->run()===FALSE){
        //     // die('Successful');
        //     
        // }
        // else {

        //     $this->addmission_model->create_student_biodata($reg_id);
        //     return redirect('admissions/applicationpaymentform');


        // }

    }

    function applicationpaymentform(){

        $data['title'] = "Payment Information";

        $this->load->view('admissions/applicationpaymentform', $data);

    }
}