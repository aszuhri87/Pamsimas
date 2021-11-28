<?php
class Pengajuanrek extends CI_Controller{

    function __construct(){
        parent::__construct();	
        if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}	
        $this->load->model('pengajuanrek_data');
        $this->load->model('pegawai_data');
        $this->load->model('pelanggan_data');
		$this->load->helper('url');
 
	}
public function index(){

$this->load->view('admin/nav/navbar');
    $this->load->view('admin/nav/menu_sidebar');
 
    $data['pengajuan_rekening'] = $this->pengajuanrek_data->tampil_data();
     $this->load->view('admin/pengajuan_rekening/data_pengajuan.php',$data);

}





// function edit_pegawai($id_pegawai){
// $this->load->view('admin/nav/navbar');
// $this->load->view('admin/nav/menu_sidebar');
// $where = array('id_pegawai' => $id_pegawai);
// $data['pegawai'] = $this->pegawai_data->edit_data($where,'pegawai')->result();
// $this->load->view('admin/pegawai/edit_pegawai',$data);
// }

function update_pengajuan(){
$this->load->helper('string');
$id = $this->input->post('id_ajuan');

    $data = array(
        'status'=>$this->input->post('status'),
        'biaya_daftar'=>$this->input->post('biaya_daftar'),
        'tgl_bayar'=>$this->input->post('tgl_bayar'),
        'id_pegawai'=>$this->input->post('id_pegawai'),
        'terakhir_update'=>$this->input->post('terakhir_update'),
        );

$where = array(
    'id_ajuan'=>$id
);

$this->pengajuanrek_data->update_data($where,$data,'pengajuan_rekening');
redirect('admin/pengajuan_rekening');
}

// function hapus_pen($id){
// $where = array('id_ajuan' => $id);
// $this->pegawai_data->hapus_data($where,'pegawai');
// redirect('data_pegawai');
// }


}