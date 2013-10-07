<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 试听课报名的模型层
 * 
 * @author 风格独特
 */

class Apply_m extends CI_Model 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($id)
	{
		$id = (int) $id;
		$this->db->where('id', $id);
		$query = $this->db->get('apply');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_list($limit, $offset = 0)
	{		
		$this->db->order_by('id DESC');
		$query = $this->db->get('apply', $limit, $offset);
		return $query->result_array();
	}
	
	public function get_num() 
	{
		return $this->db->count_all_results('apply');
	}
	
	public function add($data)
	{
		$data['add_time'] = time();
		if($this->db->insert('apply', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($id, $data) 
	{
		$id = (int) $id;
		$this->db->where('id', $id);
		$this->db->update('apply', $data);
	}
	
	public function del($id) 
	{
		$this->db->where('id', $id);
		if($this->db->delete('apply') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
