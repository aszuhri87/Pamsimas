<?php
class Akunapp extends CI_Controller{


    function __construct(){
		parent::__construct();		
        $this->load->model('akun_data');
        $this->load->model('pegawai_data');
        $this->load->helper('url');
 
	}
public function akun_home(){

     $this->load->view('nav/navbar');
        $this->load->view('nav/menu_sidebar');
    $this->load->view('admin/beranda.php');

}

public function tambah_akun(){

    $this->load->view('nav/navbar');
       $this->load->view('nav/menu_sidebar');
   $this->load->view('admin/akun/tambah_akun.php');

}

public function tambah_akun_aksi(){


    $username = $this->input->post('username');
    $id_pgw = $this->db->get('pegawai');
    $password =  md5($this->input->post('password'));
    $r_admin = ($this->input->post('role_admin'))? 'true':'false';
    $r_tagihan =($this->input->post('role_tagihan'))? 'true':'false';
    $r_pelanggan = ($this->input->post('role_pelanggan'))? 'true':'false';
    $r_laporan = ($this->input->post('role_laporan'))? 'true':'false';

		$data = array(
            'username'=>$username,
            'id_pegawai'=>$id_pgw,
            'password'=>$password,
            'role_admin'=>$r_admin,
            'role_tagihan' => $r_tagihan,
            'role_pelanggan'=>$r_pelanggan,
            'role_laporan'=>$r_laporan,
		
			);
		$this->akun_data->input_data($data,'akun_app');
		redirect('admin/tambah_akun');

}
public function data_akun(){

    $this->load->view('nav/navbar');
       $this->load->view('nav/menu_sidebar');
       $data['akun_app'] = $this->akun_data->tampil_data()->result();
		$this->load->view('admin/akun/data_akun.php',$data);
    

}
}
