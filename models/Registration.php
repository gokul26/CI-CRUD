<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Model 
{

    
	public function __construct()
	{
		$this->load->database();
	}

    public function submit()
    {
        
		$data = array(
			'name' => $this->input->post('name'),
			'username'	=> $this->input->post('username'),
			'email' => $this->input->post('email')
		);

		return $this->db->insert('users', $data);
    }
}
