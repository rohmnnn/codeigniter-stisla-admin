<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
        $this->auth->cek_login();
        $this->load->model("users");
        $this->load->library('form_validation');
	}

	public function index()
	{
        $this->stisla->load('stisla/admin', 'dashboard');
    }
    
    public function user()
	{
        $data['users'] = $this->users->getAll();
        $this->stisla->load('stisla/admin', 'admin/data-user',$data);
    }
    
    public function edit($id)
	{
		$data['users'] = $this->users->getById($id);
		$this->stisla->load('stisla/admin', 'admin/edit-user',$data);
    }
    
    public function update()
	{
		$this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required');
        
		if ($this->form_validation->run()==true)
        {
		 	$id = $this->input->post('id');
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
            $this->users->update($data,$id);
			redirect('dashboard/user');
		}
		else
		{
			$id = $this->input->post('id');
            $data['users'] = $this->users->getById($id);
            $this->stisla->load('stisla/admin', 'admin/edit-user',$data);
		}
    }
    
    public function add()
	{
		$this->stisla->load('stisla/admin', 'admin/add-user');
    }

    function delete($id)
	{
		$this->users->delete($id);
		redirect('dashboard/user');
	}
}