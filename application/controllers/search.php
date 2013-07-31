<?php

class Search extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('search_m');
		$this->load->model('index_img_m');
	}
	
	public function index() 
	{
		$f = $this->input->get('f', TRUE) . '';
		$keyword = $this->input->get('keyword', TRUE) . '';
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		$per_page = 20;
		
		$data['keyword'] = $keyword;
		$data['f'] = $f;
		
		$like_q = array();
		
		// 判断是搜索那个表
		if($f == 'teacher') {
			$this->search_m->set_table('teacher');
			$like_q['name'] = $keyword;
			$data['rows'] = $this->search_m
				->like($like_q)
				->result_array($per_page, $per_page * ($p - 1));
			$total_rows = $this->search_m->total_rows();
		} elseif ($f == 'course') {
			$this->search_m->set_table('courses');
			$like_q['name'] = $keyword;
			$data['rows'] = $this->search_m
				->like($like_q)
				->result_array($per_page, $per_page * ($p - 1));
			$total_rows = $this->search_m->total_rows();
		} elseif ($f == 'project') {
			$this->search_m->set_table('project');
			$like_q['name'] = $keyword;
			$data['rows'] = $this->search_m
				->like($like_q)
				->result_array($per_page, $per_page * ($p - 1));
			$total_rows = $this->search_m->total_rows();
		} elseif ($f == 'activity') {
			$this->search_m->set_table('activity');
			$like_q['name'] = $keyword;
			$data['rows'] = $this->search_m
				->like($like_q)
				->result_array($per_page, $per_page * ($p - 1));
			$total_rows = $this->search_m->total_rows();
		} else {
			$this->search_m->set_table('article');
			$like_q['title'] = $keyword;
			$data['rows'] = $this->search_m
				->like($like_q)
				->result_array($per_page, $per_page * ($p - 1));
			$total_rows = $this->search_m->total_rows();
		}
		
		$data['page_html'] =  $this->_page_init_search($per_page, $total_rows);
		$data['ad_img'] = $this->index_img_m->get_list(Index_img_m::IMG_BANNER);
		$data['ad_img_num'] = count($data['ad_img']);
		
		$this->load->view('header.php', $data);
		$this->load->view('search.php');
		$this->load->view('footer.php');
	}
	
	private function _page_init_search($per_page, $total_rows)
	{
		$this->load->library('pagination');
	
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
	
		// 处理分页的base_url
		$gets = $this->input->get();
		if(isset($gets['p'])) {
			unset($gets['p']);
		}
		$query = '';
		if($gets != FALSE) {
			$query = http_build_query($gets);
		}
		
		$config['base_url'] = base_url(uri_string() . '/?' . $query);
		$config['num_links'] = 6;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
		$config['first_tag_open'] = '';
		$config['first_tag_close'] = '';
		$config['last_tag_open'] = '';
		$config['cur_tag_open'] = '<strong>';
		$config['next_tag_open'] = '';
		$config['next_tag_close'] = '';
		$config['prev_tag_open'] = '';
		$config['prev_tag_close'] = '';
		$config['num_tag_open'] = '';
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}