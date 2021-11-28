<?php
class Auth extends CI_Controller{

    function __construct(){
		parent::__construct();		
        // $this->load->model('session');
     
        $this->load->helper('url');
 
    }
    
    function doLogin(){
        // $this->load->view('admin/nav/navbar');
        // $this->load->view('admin/nav/menu_sidebar');
        $this->load->view('admin/auth/login.php');
    }

    public function login(){
  
        $username = $this->input->post('username');
        $password =  md5($this->input->post('password'));
        $user=$this->db->query("select * from akun_app where username='$username' AND password='$password'")->row_array();

        if($user){
            $data_login=array(
                'status_login'=>true,
                'username'=>$user['username'],
                'id_pegawai'=>$user['id_pegawai'],
                'role_admin'=>$user['role_admin'],
                'role_pelanggan'=>$user['role_pelanggan'],
                'role_tagihan'=>$user['role_tagihan'],
                'role_laporan'=>$user['role_laporan'],

            );

        $this->session->set_userdata($data_login);
        redirect('admin/dashboard');
        }else{
           $this->session->set_flashdata('message', 'username/password salah!');
            redirect('admin/login');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
    
}
?>