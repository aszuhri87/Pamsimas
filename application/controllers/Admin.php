<?php
class Admin extends CI_Controller{


    function __construct(){
		parent::__construct();		
        $this->load->model('pelanggan_data');
        $this->load->model('pegawai_data');
		$this->load->helper('url');
 
	}
public function beranda(){

     $this->load->view('nav/navbar');
        $this->load->view('nav/menu_sidebar');
    $this->load->view('admin/beranda.php');

}

public function tambah_pelanggan(){

    $this->load->view('nav/navbar');
       $this->load->view('nav/menu_sidebar');
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
		redirect('admin/tambah_pelanggan');

}
public function data_pelanggan(){

    $this->load->view('nav/navbar');
       $this->load->view('nav/menu_sidebar');
       $data['pelanggan'] = $this->pelanggan_data->tampil_data()->result();
		$this->load->view('admin/pelanggan/data_pelanggan.php',$data);
    

}

function edit_pelanggan($nik){
    $this->load->view('nav/navbar');
    $this->load->view('nav/menu_sidebar');
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
	redirect('data_pelanggan');
}

function hapus_pelanggan($nik){
    $where = array('NIK' => $nik);
    $this->pelanggan_data->hapus_data($where,'pelanggan');
    redirect('data_pelanggan');
}

public function tambah_pegawai(){

    $this->load->view('nav/navbar');
       $this->load->view('nav/menu_sidebar');
   $this->load->view('admin/pegawai/tambah_pegawai.php');

}

public function data_pegawai(){

    $this->load->view('nav/navbar');
       $this->load->view('nav/menu_sidebar');
       $data['pegawai'] = $this->pegawai_data->tampil_data()->result();
		$this->load->view('admin/pegawai/data_pegawai.php',$data);
    

}

public function tambah_pegawai_aksi(){

    $this->load->helper('string');
    $id_pegawai = random_string('alnum',10);
    $nama_pgw = $this->input->post('nm_pegawai');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $stts_kerja = $this->input->post('stts_kerja');
    $jabatan = $this->input->post('jabatan');
   

		$data = array(
            'id_pegawai'=>$id_pegawai,
            'nm_pegawai'=>$nama_pgw,
            'no_hp'=>$no_hp,
            'alamat' => $alamat,
            'stts_kerja'=>$stts_kerja,
            'jabatan'=>$jabatan
			);
		$this->pegawai_data->input_data($data,'pegawai');
		redirect('admin/tambah_pegawai');

}

function edit_pegawai($id_pegawai){
    $this->load->view('nav/navbar');
    $this->load->view('nav/menu_sidebar');
    $where = array('id_pegawai' => $id_pegawai);
    $data['pegawai'] = $this->pegawai_data->edit_data($where,'pegawai')->result();
    $this->load->view('admin/pegawai/edit_pegawai',$data);
}

function update_pegawai(){
    $this->load->helper('string');
    $id_pegawai = $this->input->post('id_pegawai');
    $nama_pgw = $this->input->post('nm_pegawai');
    $no_hp = $this->input->post('no_hp');
    $alamat = $this->input->post('alamat');
    $stts_kerja = $this->input->post('stts_kerja');
    $jabatan = $this->input->post('jabatan');

		$data = array(
         
            'nm_pegawai'=>$nama_pgw,
            'no_hp'=>$no_hp,
            'alamat' => $alamat,
            'stts_kerja'=>$stts_kerja,
            'jabatan'=>$jabatan
			);

    $where = array(
		'id_pegawai'=>$id_pegawai
	);
 
	$this->pegawai_data->update_data($where,$data,'pegawai');
	redirect('data_pegawai');
}

function hapus_pegawai($id_pegawai){
    $where = array('id_pegawai' => $id_pegawai);
    $this->pegawai_data->hapus_data($where,'pegawai');
    redirect('data_pegawai');
}


}