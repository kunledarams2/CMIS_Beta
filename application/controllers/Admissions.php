
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
            // die($username );
            // die($password );
            // do a check
            if($student_adm_Id){

             return redirect('admissions/applicationform');
            // $this->session->set_flashData('login_success', ', You can now Log in');

            } else{
            $this->session->set_flashData('login_error', 'Invalid login detail, Please enter correct surname and password');

                return redirect('admissions/login');
            }

            // die('continue');
        }
        
    }

    function applicationform(){
        $data['title'] = "Create Account";
        
        $this->load->view('templates/header');
        $this->load->view('admissions/admissionapplicationform', $data);
        $this->load->view('templates/footer');

        // $this->addmission_model->create_student_biodata();
    }
}