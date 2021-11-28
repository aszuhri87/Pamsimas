<?php
class Settagihan extends CI_Controller{


    function __construct(){
        parent::__construct();
        if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}		
        $this->load->model('settagihan_data');
     
        $this->load->helper('url');
 
    }
    function index(){
        $this->load->view('admin/nav/navbar');
        $this->load->view('admin/nav/menu_sidebar');
        $data['setting_tagihan'] = $this->settagihan_data->tampil_data()->result();
		
    
        $this->load->view('admin/setting_tagihan/tambah_tagihan.php',$data);
    }
    
    function update(){
        $id = $this->input->post('id');

    
            $data = array(
                'biaya_denda'=>$this->input->post('biaya_denda'),
                'biaya_tagihan'=>$this->input->post('biaya_tagihan'),
                'biaya_perawatan'=>$this->input->post('biaya_perawatan'),
                'biaya_daftar'=>$this->input->post('biaya_daftar'),
            
                );
    
        $where = array(
            'id' => $id
        );
     
        $this->settagihan_data->update_data($where,$data,'setting_tagihan');
        redirect('admin/setting_tagihan');
    }

    
}