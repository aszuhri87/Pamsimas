<?php
class Pelanggan extends CI_Controller{


    function __construct(){
        parent::__construct();		
        if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}
        $this->load->model('pelanggan_data');
        $this->load->model('pegawai_data');
		$this->load->helper('url');
 
	}
public function beranda(){

     $this->load->view('admin/nav/navbar');
        $this->load->view('admin/nav/menu_sidebar');
    $this->load->view('admin/beranda.php');

}

public function tambah_pelanggan(){

    $this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
   $this->load->view('admin/pelanggan/tambah.php');

}

public function tambah_pelanggan_aksi(){


    $nik = $this->input->post('NIK');
    $no_rek = $this->input->post('no_rekening');
    $nama_plg = $this->input->post('nm_pelanggan');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $email = $this->input->post('email');
    $tgl_buat = $this->input->post('tgl_buat');
    $password = md5($this->input->post('password'));

		$data = array(
            'NIK'=>$nik,
            'no_rekening'=>"REK-".$no_rek,
            'nm_pelanggan'=>$nama_plg,
            'no_hp'=>$no_hp,
            'alamat' => $alamat,
            'rt'=>$rt,
            'rw'=>$rw,
            'email'=>$email,
            'tgl_buat'=>$tgl_buat,
            'password'=>$password
		
			);
		$this->pelanggan_data->input_data($data,'pelanggan');
		redirect('data_pelanggan');

}
public function data_pelanggan(){

    $this->load->view('admin/nav/navbar');
        $this->load->view('admin/nav/menu_sidebar');
       $data['pelanggan'] = $this->pelanggan_data->tampil_data()->result();
		$this->load->view('admin/pelanggan/data_pelanggan.php',$data);
    

}

function edit_pelanggan($nik){
    $this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
    $where = array('NIK' => $nik);
    $data['pelanggan'] = $this->pelanggan_data->edit_data($where,'pelanggan')->result();
    $this->load->view('admin/pelanggan/edit_pelanggan',$data);
}

function update_pelanggan(){
    $nik = $this->input->post('NIK');
    $no_rek = $this->input->post('no_rekening');
    $nama_plg = $this->input->post('nm_pelanggan');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $email = $this->input->post('email');
    $tgl_buat = $this->input->post('tgl_buat');
    $password = md5($this->input->post('password'));

		$data = array(
            'NIK'=>$nik,
            'no_rekening'=>"REK-".$no_rek,
            'nm_pelanggan'=>$nama_plg,
            'no_hp'=>$no_hp,
            'alamat' => $alamat,
            'rt'=>$rt,
            'rw'=>$rw,
            'email'=>$email,
            'tgl_buat'=>$tgl_buat,
            'password'=>$password
		
			);

    $where = array(
		'NIK' => $nik
	);
 
	$this->pelanggan_data->update_data($where,$data,'pelanggan');
	redirect('admin/data_pelanggan');
}

function hapus_pelanggan($nik){
    $where = array('NIK' => $nik);
    $this->pelanggan_data->hapus_data($where,'pelanggan');
    redirect('data_pelanggan');
}
}