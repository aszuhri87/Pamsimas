<?php
class Akunapp extends CI_Controller{


    function __construct(){
        parent::__construct();	
        if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}
        $this->load->model('akun_data');
     
        $this->load->helper('url');
 
    }
    

    
public function akun_home(){

    $this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
    $this->load->view('admin/beranda.php');

}

// public function tambah_akun($id_pegawai){

//     $this->load->view('admin/nav/navbar');
// $this->load->view('admin/nav/menu_sidebar');
//        $where = array('id_pegawai' => $id_pegawai);
// $data['pegawai'] = $this->pegawai_data->edit_data($where,'pegawai')->result();
//    $this->load->view('admin/akun/tambah_akun.php');

// }

public function tambah_akun_aksi(){


    $username = $this->input->post('username');
    $id_pegawai = $this->input->post('id_pegawai');
    $password =  md5($this->input->post('password'));
    $r_admin = ($this->input->post('role_admin'))? 'true':'false';
    $r_tagihan =($this->input->post('role_tagihan'))? 'true':'false';
    $r_pelanggan = ($this->input->post('role_pelanggan'))? 'true':'false';
    $r_laporan = ($this->input->post('role_laporan'))? 'true':'false';

		$data = array(
            'username'=>$username,
            'id_pegawai'=>$id_pegawai,
            'password'=>$password,
            'role_admin'=>$r_admin,
            'role_tagihan' => $r_tagihan,
            'role_pelanggan'=>$r_pelanggan,
            'role_laporan'=>$r_laporan,
		
			);
		$this->akun_data->input_data($data,'akun_app');
		redirect('admin/data_akun');

}
public function update_akun(){


    $username = $this->input->post('username');
    $id_pegawai = $this->input->post('id_pegawai');
    $password =  md5($this->input->post('password'));
    $r_admin = ($this->input->post('role_admin'))? 'true':'false';
    $r_tagihan =($this->input->post('role_tagihan'))? 'true':'false';
    $r_pelanggan = ($this->input->post('role_pelanggan'))? 'true':'false';
    $r_laporan = ($this->input->post('role_laporan'))? 'true':'false';

		$data = array(
            'username'=>$username,
            'id_pegawai'=>$id_pegawai,
            'password'=>$password,
            'role_admin'=>$r_admin,
            'role_tagihan' => $r_tagihan,
            'role_pelanggan'=>$r_pelanggan,
            'role_laporan'=>$r_laporan,
		
            );
            $where = array(
                'id_pegawai'=>$id_pegawai,
            );
		$this->akun_data->input_data($data,'akun_app');
		redirect('admin/data_akun');

}
public function data_akun(){

    $this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
       $data['akun_app'] = $this->akun_data->tampil_data();
		$this->load->view('admin/akun/data_akun.php',$data);
    

}
function hapus_akun($username){
    $where = array('username' => $username);
    $this->akun_data->hapus_data($where,'akun_app');
    redirect('admin/data_akun');
}
}
