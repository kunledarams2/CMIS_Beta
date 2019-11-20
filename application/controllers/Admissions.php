
<?php
class Admissions extends CI_Controller{

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
            // die('continue');
             return redirect('admissions/applicationform');
        }
        
    }

    function createaccount(){
        $data['title'] = "Create Account";

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');


        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('admissions/createaccount', $data);
            $this->load->view('templates/footer');
        }
        else{
            // die('continue');
            return redirect('admissions/login');
        }
        
    }

    function applicationform(){
        $data['title'] = "Create Account";
        
        $this->load->view('templates/header');
        $this->load->view('admissions/admissionapplicationform', $data);
        $this->load->view('templates/footer');
    }
}