<?php
class Pengumuman extends CI_Controller{
    function __construct(){
        parent::__construct();	
        if($this->session->userdata('status_login') != "login"){
			redirect(base_url("admin/login"));
		}
        $this->load->model('pengumuman_data');
        
     
        $this->load->helper('url');
        $this->load->helper('form');
 
    }


    public function tambah_pengumuman(){

        $this->load->view('admin/nav/navbar');
            $this->load->view('admin/nav/menu_sidebar');
        $this->load->view('admin/pegawai/tambah_pengumuman.php');
        
        }
        
        public function data_pengumuman(){
        $this->load->model('pegawai_data');
        $this->load->view('admin/nav/navbar');
        $this->load->view('admin/nav/menu_sidebar');
      
           $data['pengumuman'] = $this->pengumuman_data->tampil_data();
            $this->load->view('admin/pengumuman/data_pengumuman_new.php',$data);
        
        
        }
        
        public function tambah_pengumuman_aksi(){
    
            $data = array(
               
                'tgl_publish'=> $this->input->post('tgl_publish'),
                'isi_pengumuman'=>$this->input->post('isi_pengumuman'),
                'pegawai'=>$this->input->post('nm_pegawai'),
                );
            $this->pengumuman_data->input_data($data,'pengumuman');
            redirect('admin/data_pengumuman');
        
        }
        
        function edit_pengumuman($id_pengumuman){
        $this->load->view('admin/nav/navbar');
            $this->load->view('admin/nav/menu_sidebar');
        $where = array('id_pengumuman' => $id_pengumuman);
        $data['pengumuman'] = $this->pengumuman_data->edit_data($where,'pengumuman')->result();
        $this->load->view('admin/pengumuman/edit_pengumuman',$data);
        }
        
        function update_pengumuman(){
        $this->load->helper('string');
        $id = $this->input->post('id');
     
        
            $data = array(
             
                'tgl_publish'=> $this->input->post('tgl_publish'),
                'isi_pengumuman'=>$this->input->post('isi_pengumuman'),
                'pegawai'=>$this->input->post('nm_pegawai'),
                );
        
        $where = array(
            'id'=>$id
        );
        
        $this->pengumuman_data->update_data($where,$data,'pengumuman');
        redirect('admin/data_pengumuman');
        }
        
        function hapus_pengumuman($id_pengumuman){
        $where = array('id_pengumuman' => $id_pengumuman);
        $this->pengumuman_data->hapus_data($where,'pengumuman');
        redirect('admin/ data_pengumuman_new');
        }
        
        
    


}