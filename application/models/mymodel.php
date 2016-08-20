<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function GetMahasiswa(){
		$data= $this->db->query('select * from mahasiswa');
		return $data->result_array();
	}
		public function InsertData($tableName,$data){
		$res=$this->db->insert($tableName,$data);
		return $res;
	}
	public function UpdateData($tableName,$data,$where){
		$res=$this->db->update($tableName,$data,$where);
		return $res;
	}
	public function DeleteData($tableName,$where){
		$res=$this->db->delete($tableName,$where);
		return $res;
	}
}

