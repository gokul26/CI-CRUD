<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Model 
{

    
	public function __construct()
	{
		$this->load->database();
	}


    public function allposts($slug = FALSE)
    {
        if($slug===FALSE)
        {
            $this->db->order_by('users.id','DESC');
            $query = $this->db->get('users');
            return $query->result_array();
        }
        else
        {
            $query = $this->db->get_where('users',array('id'=>$slug));
            return $query->row_array();
        }
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

    public function update()
    {
		$data = array(
			'name' => $this->input->post('name'),
			'username'	=> $this->input->post('username'),
			'email' => $this->input->post('email')
        );
        
		$this->db->where('id',$this->input->post('id'));
		return $this->db->update('users', $data);
    }
}
