<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 公益管理模型层
 * 
 * @author 风格独特
 */

class Activity_m extends CI_Model 
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
		$query = $this->db->get('activity');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
	public function get_list($limit, $offset = 0, $type = '')
	{
		$return = array();
		if($type != '') {
			$this->db->where('type', $type);
		}
		
		$this->db->order_by('index DESC, id DESC');
		$query = $this->db->get('activity', $limit, $offset);
		$return = $query->result_array();
		return $return;
	}
	
	public function get_index_list($limit = -1) 
	{
		$return = array();
		
		$this->db->where('index >', 0);
		$this->db->order_by('index DESC, id DESC');
		if ($limit > 0) {
			$query = $this->db->get('activity', $limit);
		} else {
			$query = $this->db->get('activity');
		}
		$return = $query->result_array();
		return $return;
	}
	
	public function get_num($type = '')
	{
		if($type != '') {
			$this->db->where('type', $type);
		}
		return $this->db->count_all_results('activity');
	}
	
	public function get_search($keyword = '', $limit, $offset = 0, $type = 0)
	{
		$return = array();
		$i = 0;
		$this->db->select('id, name, add_time, index');
		$this->db->like('name', $keyword);
		$this->db->order_by('id DESC');
		if($type != 0) {
			$this->db->where('type', $type);
		}
		$query = $this->db->get('activity', $limit, $offset);
		return $return;
	}	
	public function add($data)
	{
		if($this->db->insert('activity', $data) === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	public function edit($id, $data)
	{
		$id = (int) $id;
		$this->db->where('id', $id);
		$this->db->update('activity', $data);
	}
	
	public function del($id)
	{
		$this->db->where('id', $id);
		if($this->db->delete('activity') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
