<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('name', 'name','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$name = $this->input->post('name');
			$this->auth->register($email,$password,$name);
			$this->session->set_flashdata('success_register','Berhasil!');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
    }
    
	public function proses1()
	{
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('name', 'name','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$name = $this->input->post('name');
			$this->auth->register($email,$password,$name);
			$this->session->set_flashdata('success_register','Berhasil!');
			redirect('dashboard/add');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('dashboard/add');
		}
	}
}