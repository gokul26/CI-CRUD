<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Model 
{

    
	public function __construct()
	{
		$this->load->database();
	}


    public function allposts()
    {
        $this->db->order_by('users.id','DESC');
        $query = $this->db->get('users');
        return $query->result_array();
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
