<?php 
 
class Akun_data extends CI_Model{
	function tampil_data(){
   
        $this->db->select('akun_app.*, pegawai.nm_pegawai'); 		
        $this->db->from('akun_app'); 		
        $this->db->join('pegawai', 'pegawai.id_pegawai=akun_app.id_pegawai'); 		
        $query = $this->db->get(); 		
        return $query->result();
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function cek_login($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}