<?php

class M_admin extends CI_Model {
	
	function get_data($select="*", $table="", $where=NULL){
		$this->db->select($select);
		if($where !== NULL)
		$this->db->where($where);   
		return $this->db->get($table);
	}
  
	function save_data($data, $table){
		$return = FALSE;
		if ($this->db->insert($table, $data)){
			$return = TRUE;
		}
		 
		return $return;
	}
  
	function update_data($id, $field, $data, $table){
		$return = FALSE;
		$this->db->where($field, $id);
		if ($this->db->update($table, $data)){
			$return = TRUE;
		}
		 
		return $return;
	}
  
	function delete_data($id, $field, $table){
		$return = FALSE;
		$this->db->where($field, $id);
		if ($this->db->delete($table)){
			$return = TRUE;
		}
		 
		return $return;
	}
 
}