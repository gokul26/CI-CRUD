<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
        $data['title']='Register Here!';

        $this->load->view('imports/header');
        $this->load->view('register_home',$data);
        $this->load->view('imports/footer');
		// $this->load->view('register_home');
    }
	public function create()
	{
        // print_r ($_POST);
    	$this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');

        $data['title'] = "Register Here!";
        if($this->form_validation->run() === FALSE)
        {
        $this->load->view('imports/header');
        $this->load->view('register_home',$data);
        $this->load->view('imports/footer');
        }
        else
        {
        	$this->registration->submit();
            //Set Message
            $this->session->set_flashdata('user_registered','Successfully Registered.');
        	redirect('register');
        }

	}
}
