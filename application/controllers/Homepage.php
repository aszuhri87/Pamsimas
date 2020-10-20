<?php
class Homepage extends CI_Controller{
	function __construct(){
		parent::__construct();
		// $this->load->model('m_barang');
		// $this->load->library('session');
	}

	function index(){
        $this->load->view('nav/navbar');
        $this->load->view('nav/menu_sidebar');
        $this->load->view('homepage');
    }
}