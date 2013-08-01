<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('about_m');
		$this->load->model('article_m');
		$this->load->model('course_m');
		$this->load->model('project_m');
		$this->load->model('index_img_m');
		$this->load->model('config_m');		
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		$aid = (int) $this->input->get('aid');
		
		$data['about'] = $this->about_m->get($aid);
		
		$data['news'] = $this->article_m->get_list(8);
		$data['course'] = $this->course_m->get_list(8);
		$data['project'] = $this->project_m->get_list(8);
		$data['ad_img'] = $this->index_img_m->get_list(Index_img_m::IMG_BANNER);
		$data['ad_img_num'] = count($data['ad_img']);
		
		$data['address'] = $this->config_m->item('address');
		$data['phone'] = $this->config_m->item('phone');
		$data['fax'] = $this->config_m->item('fax');		

		$left_navi['title'] = '关于我们';
		$abouts = $this->about_m->get_list();
		$i = 0;
		foreach ($abouts as $about) {
			$left_navi['types'][$i]['tid'] = $about['aid'];
			$left_navi['types'][$i]['type'] = $about['type'];
			++$i;
		}
		
		if($aid == FALSE) {
			$data['about'] = $abouts[0];	
		}
		
		$this->load->view('header.php', $data);
		$this->load->view('about.php');
		$this->load->view('info_right.php');
		$this->load->view('footer.php');
	}
}
