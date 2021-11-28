<?php 
 
class Pengajuanrek_data extends CI_Model{
	function tampil_data(){
        $this->db->select('pengajuan_rekening.*, pegawai.nm_pegawai,pelanggan.nik'); 		
        $this->db->from('pengajuan_rekening'); 		
        $this->db->join('pegawai', 'pegawai.id_pegawai=pengajuan_rekening.id_pegawai','LEFT'); 
        $this->db->join('pelanggan', 'pelanggan.nik=pengajuan_rekening.nik','LEFT');		
        $query = $this->db->get(); 		
        return $query->result();
	}

	function edit_data($where,$table){		
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