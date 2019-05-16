<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
        $data['title']='Register Here!';
        $data['Type']='User-List';
        $data['posts'] = $this->registration->allposts();

        $this->load->view('imports/header');
        $this->load->view('register_home',$data);
        $this->load->view('imports/footer');
		// $this->load->view('register_home');
    }
	public function create()
	{
        // print_r ($_POST);
        
        $data['posts'] = $this->registration->allposts();
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
            // Upload Image
            $config['upload_path'] = './assets/images/profile';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);
            
            if(!$this->upload->do_upload('profilepic'))
            {
                $errors = array('error' => $this->upload->display_errors());
                $prof_pic= 'noimage.jpg';
            } 
            else 
            {
                $data = array('upload_data' => $this->upload->data());
                $prof_pic = $_FILES['profilepic']['name'];
            }

        	$this->registration->submit($prof_pic);
            //Set Message
            $this->session->set_flashdata('user_registered','Successfully Registered.');
        	redirect('register');
        }

    }
    
    
	public function edit($slug = NULL)
	{
        // print_r ($_POST);
        
        $data['posts'] = $this->registration->allposts($slug);

        $data['title'] = "User Details";
        $this->load->view('imports/header');
        $this->load->view('edit_user',$data);
        $this->load->view('imports/footer');
    }
    
	public function update($slug= NULL)
	{
        $data['posts'] = $this->registration->allposts($slug);
        $data['title'] = "Edit User Details";
        $this->registration->update();
        //Set Message
        $this->session->set_flashdata('user_edited','Successfully Edited.');
        redirect('register');
    }
    
    public function delete($id)
    {
        $this->registration->delete($id);
        //Set Message
        $this->session->set_flashdata('user_deleted','Successfully Removed.');
        redirect('register');
    }
}
