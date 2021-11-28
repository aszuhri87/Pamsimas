<?php
class Pegawai extends CI_Controller{

    function __construct(){
        parent::__construct();		
        if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}
        $this->load->model('pelanggan_data');
        $this->load->model('pegawai_data');
		$this->load->helper('url');
 
	}
public function tambah_pegawai(){

$this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
$this->load->view('admin/pegawai/tambah_pegawai.php');

}

public function data_pegawai(){

$this->load->view('admin/nav/navbar');
$this->load->view('admin/nav/menu_sidebar');
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
    redirect('admin/pegawai/data_pegawai');

}

function edit_pegawai($id_pegawai){
$this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
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
redirect('admin/data_pegawai');
}

function hapus_pegawai($id_pegawai){
$where = array('id_pegawai' => $id_pegawai);
$this->pegawai_data->hapus_data($where,'pegawai');
redirect('admin/data_pegawai');
}


}