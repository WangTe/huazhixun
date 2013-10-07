<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		session_start();
		$this->load->model('apply_m');
		$this->load->helper('form');
		$this->load->library('captcha_np');
		$this->load->model('index_img_m');
		$this->load->model('config_m');	
	}

	/**
	 * 首页
	 */
	public function index() 
	{
		exit;
		$cid = (int) $this->input->get('cid');
		
		$course = $this->courses_m->get($cid);
		if($course == FALSE) {
			header('Location: ' . base_url('course/'));
			exit;
		}
		$data['course'] = $course['name'];
		$data['cid'] = $cid;
		$data['error'] = '';

		$this->load->view('header.php');
		$this->load->view('img_1.php', array('img'	=>	3));
		$this->load->view('left_course.php');
		$this->load->view('apply.php', $data);
		$this->load->view('footer.php');
	}
	
	public function add() 
	{
		/*$cid = (int) $this->input->get('cid');
		$check = isset($_SESSION['apply_check']) ? $_SESSION['apply_check'] : '';
		unset($_SESSION['apply_check']);
		$course = $this->courses_m->get($cid);
		if($course == FALSE) {
			header('Location: ' . base_url('course/'));
			exit;
		}
		$data['course'] = $course['name'];
		$data['cid'] = $cid;

		// 验证码检测
		$apply_check = $this->input->post('apply_check');
		if($apply_check == FALSE) {
			header('Location: ' . base_url('course/'));
			exit;
		}
		if($apply_check != $check) {
			$data['error'] = '验证码错误';
			
			$this->load->view('header.php');
			$this->load->view('img_1.php', array('img'	=>	3));
			$this->load->view('left_course.php');
			$this->load->view('apply.php', $data);
			$this->load->view('footer.php');
			return ;
		}
		
		$data_add['cid'] = $course['cid'];
		$data_add['type'] = $course['type'];*/
		
		$data_add['name'] = $this->input->post('name', TRUE);
		$data_add['sex'] = $this->input->post('sex', TRUE);
		$data_add['company'] = $this->input->post('company', TRUE);
		$data_add['position'] = $this->input->post('position', TRUE);
		$data_add['address'] = $this->input->post('address', TRUE);
		$data_add['phone'] = $this->input->post('phone', TRUE);
		
		$data['ad_img'] = $this->index_img_m->get_list(Index_img_m::IMG_BANNER);
		$data['ad_img_num'] = count($data['ad_img']);
		$data['address'] = $this->config_m->item('address');
		$data['phone'] = $this->config_m->item('phone');
		$data['fax'] = $this->config_m->item('fax');	

		if(in_array(FALSE, $data_add)) {
			$data['success'] = FALSE;
			$data['error'] = '信息提交不全面，请重新补充必要信息';
		} else if($this->apply_m->add($data_add) != FALSE) {
			$data['success'] = TRUE;
		} else {
			$data['success'] = FALSE;
			$data['error'] = '申请错误';
		}

		$this->load->view('header.php', $data);
		$this->load->view('apply_notice.php');
		$this->load->view('footer.php');
	}
	
	/**
	 * 验证码模块
	 */
	public function captcha()
	{
		$this->captcha_np->setStyle(1);
		$this->captcha_np->setBgColor(array(0, 23, 33));
		$this->captcha_np->setFontColor(array(255, 255, 235));
		$_SESSION['apply_check'] = $this->captcha_np->getStr();
		$this->captcha_np->display();
	}
}
