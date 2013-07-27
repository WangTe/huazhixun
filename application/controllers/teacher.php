<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teacher extends CI_Controller 
{	
	/**
	 * 构造函数，防止index函数变成构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('article_m');
		$this->load->model('index_img_m');
		$this->load->model('link_m');
		$this->load->model('teacher_m');
		$this->load->model('course_m');
		$this->load->model('project_m');
		
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$id = (int) $this->input->get('id');
		$data['news'] = $this->article_m->get_list(8, 0, 2);
		$data['notice'] = $this->article_m->get_list(8, 0, 9);
		$data['ad_img'] = $this->index_img_m->get_list(Index_img_m::IMG_BANNER);
		$data['ad_img_num'] = count($data['ad_img']);
		$data['links'] = $this->link_m->get_list();
		$data['teacher'] = $this->teacher_m->get($id);
		$data['course'] = $this->course_m->get_list(8);
		$data['project'] = $this->project_m->get_list(8);
		
		
		$this->load->view('header.php', $data);
		$this->load->view('teacher_info.php', $data);
		$this->load->view('info_right.php', $data);
		$this->load->view('footer.php');
		//$this->load->view('new_index.php');
	}
	
	public function type()
	{
		$per_page = 20;
		$type = (int) $this->input->get('type');
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
		if($type < 1) {
			$type = 2;
		}
		
		$data['teachers'] = $this->teasher_m->get_list($per_page, $per_page * ($p - 1), $type);
		$data['page_html'] =  $this->_page_init($per_page);
		$data['news'] = $this->article_m->get_list(8,0);
		$data['project'] = $this->project_m->get_list(8,0);
		$data['course'] = $this->course_m->get_list(8,0);
		
		$id = (int) $this->input->get('id');
		$data['teacher'] = $this->teacher_m->get($id);
		
		
	
		$this->load->view('header.php');
	
		$this->load->view('teacher_list.php', $data);
		$this->load->view('info_right.php', $data);
		$this->load->view('footer.php');
	}
	
	private function _page_init($per_page)
	{
		$this->load->library('pagination');
		$type = (int) $this->input->get('type');
		if($type < 1) {
			$type = 2;
		}
	
		$config['total_rows'] = $this->teacher_m->get_num($type);
		$config['per_page'] = $per_page;
		$config['base_url'] = base_url('teacher/type/?type=' . $type);
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