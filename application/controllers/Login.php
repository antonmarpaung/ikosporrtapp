<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_sport');
	}

	public function index()
	{

		$this->load->view('login');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		if($this->form_validation->run() != false){
			$where = array(
				'username_admin' => $username,
				'password_admin' =>($password)
		
	);

		$data = $this->m_sport->edit_data($where, 'admin');
		$d = $this->m_sport->edit_data($where, 'admin')->row();

	$cek = $data->num_rows();
		if($cek > 0){
			$session = array(
				'id'=>$d->id_admin,
				'nama'=>$d->admin_nama,
				'status'=>true,
			);

			$this->session->set_userdata($session);
			redirect(base_url().'Dashboard/dashboard');
		}else{
			redirect(base_url().'login?pesan=gagal');
		}
        
	}else{
			$this->load->view('login');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login?pesan=logout');
	}
}