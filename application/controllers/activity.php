<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('activity_m');
		$this->load->model('project_m');
		$this->load->model('article_m');
		$this->load->model('course_m');
		$this->load->model('index_img_m');
		$this->load->model('config_m');		
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$id = (int) $this->input->get('id');
		$data['activity'] = $this->activity_m->get($id);
		$data['news'] = $this->article_m->get_list(8, 0, 2);
		$data['course'] = $this->course_m->get_list(8);
		$data['project'] = $this->project_m->get_list(8);
		$data['ad_img'] = $this->index_img_m->get_list(Index_img_m::IMG_BANNER);
		$data['ad_img_num'] = count($data['ad_img']);
		
		$data['address'] = $this->config_m->item('address');
		$data['phone'] = $this->config_m->item('phone');
		$data['fax'] = $this->config_m->item('fax');		
		
		$this->load->view('header.php', $data);
		$this->load->view('activity.php');
		$this->load->view('info_right.php');
		$this->load->view('footer.php');
	}
	
	public function type() 
	{
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}

		$this->load->model('project_m');
		$this->load->model('article_m');
		$this->load->model('course_m');
		
		$data['activities'] = $this->activity_m->get_list($per_page, $per_page * ($p - 1));
		$data['page_html'] =  $this->_page_init($per_page);
		$data['news'] = $this->article_m->get_list(8,0);
		$data['project'] = $this->project_m->get_list(8,0);
		$data['course'] = $this->course_m->get_list(8,0);		
		$data['ad_img'] = $this->index_img_m->get_list(Index_img_m::IMG_BANNER);
		$data['ad_img_num'] = count($data['ad_img']);
		
		$data['address'] = $this->config_m->item('address');
		$data['phone'] = $this->config_m->item('phone');
		$data['fax'] = $this->config_m->item('fax');
				
		$this->load->view('header.php', $data);
		$this->load->view('activity_list.php');
		$this->load->view('info_right.php');		
		$this->load->view('footer.php');
	}
	
	function search() 
	{
		$per_page = 10;
		$p = (int) $this->input->get('p');
		$keyword = $this->input->get('keyword', TRUE);
		if($p < 1) {
			$p = 1;
		}
		
		$data['activities'] = $this->activity_m->get_search($keyword, $per_page, $per_page * ($p - 1));
		$total_rows = $this->activity_m->get_num(0, $keyword);
		$data['page_html'] =  $this->_page_init_search($per_page, $total_rows);
		$data['keyword'] = htmlspecialchars(urldecode($keyword));
		
		$data['address'] = $this->config_m->item('address');
		$data['phone'] = $this->config_m->item('phone');
		$data['fax'] = $this->config_m->item('fax');		
		
		$this->load->view('header.php', $data);
		$this->load->view('search.php');
		$this->load->view('footer.php');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');

		$config['total_rows'] = $this->activity_m->get_num();
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('activity/type' );
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	private function _page_init_search($per_page, $total_rows)
	{
		$this->load->library('pagination');
		
		$keyword = $this->input->get('keyword', TRUE);
		
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('activity/search/?keyword=' . $keyword);
		$config['num_links'] = 20;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}
