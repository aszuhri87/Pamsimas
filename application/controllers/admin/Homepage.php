<?php
class Homepage extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}
		// $this->load->model('m_barang');
		// $this->load->library('session');
	}

	function index(){
        $this->load->view('admin/nav/navbar');
        $this->load->view('admin/nav/menu_sidebar');
        $this->load->view('homepage');
    }
}