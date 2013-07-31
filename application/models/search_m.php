<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 搜索部分模型层
 * 
 * @author 风格独特
 */

class Search_m extends CI_Model
{
	private $total__rows = 0;
	
	protected $table_search = '';
	
	private $like_sql = '';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function set_table($table_search) 
	{
		$this->table_search = $table_search;
	}
	
	public function result_array($limit = -1, $offset = 0) 
	{
		$result_array = array();
		if($this->table_search != '') {
			// 获取结果集
			if($limit == -1) {
				$query = $this->db->get($this->table_search);
			} else {
				$query = $this->db->get($this->table_search, $limit, $offset);
			}
			foreach ($query->result_array() as $row) {
				$result_array[] = $row;
			}
			
			// 获取搜索的总行数
			$this->total__rows = $this->db->count_all_results($this->table_search);
			
			if($this->uri->segment(2) == 'module' || $this->uri->segment(2) == 'teacher_index') {
				$last_query = $this->db->last_query();
				$sql = 'select count(numrows) AS totalrow from ( ' . $last_query . ' )t';
				$query = $this->db->query($sql);
				$row = $query->row_array();
				$this->total__rows = $row['totalrow'];
			}
		}
		// 清楚AR缓存的内容
		$this->db->flush_cache();
		return $result_array;
	}
	
	public function distinct() 
	{
		// 开启AR缓存
		$this->db->start_cache();
		$this->db->distinct();
		// 关闭AR缓存
		$this->db->stop_cache();
		
		return $this;
	}
	
	public function select($select_str) 
	{
		// 开启AR缓存
		$this->db->start_cache();
		$this->db->select($select_str);
		// 关闭AR缓存
		$this->db->stop_cache();
		
		return $this;
	}
	
	public function like($like_array) 
	{
		if(!is_array($like_array)) {
			return $this;
		}
		
		// 开启AR缓存
		$this->db->start_cache();
		foreach ($like_array as $field => $like) {
			$like = trim($like);
			$like_array = explode(' ', $like);
			$like_array = array_diff($like_array, array(''));
			if(count($like_array) > 1) {
				$this->db->like_bracket($field, $like_array);
			} else if ($like != '') {
				$this->db->like($field, $like);
			} else {
				
			}
		}
		// 关闭AR缓存
		$this->db->stop_cache();
		return $this;
	}
	
	public function order($order_str) 
	{
		// 开启AR缓存
		$this->db->start_cache();
		
		$this->db->order_by($order_str);
		
		// 关闭AR缓存
		$this->db->stop_cache();
		return $this;
	}
	
	public function group($group_str) 
	{
		$this->db->start_cache();
		
		$this->db->group_by($group_str);
		
		$this->db->stop_cache();
		return $this;
	}
	
	public function where()
	{
		$this->db->start_cache();
		
		$this->db->stop_cache();
		return $this;
	}
	
	public function total_rows() 
	{
		return $this->total__rows;
	}
}
