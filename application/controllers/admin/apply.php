<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 免费试听申请的控制器
 * 
 * @author 风格独特
 */

class Apply extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('/admin/index');
		}
		$this->load->model('apply_m');
		$this->load->helper('form');
	}

	public function index()
	{
		$per_page = 20;
		$p = (int) $this->input->get('p');
		if($p < 1) {
			$p = 1;
		}
	
		$data['applys'] = $this->apply_m->get_list($per_page, ($p - 1) * $per_page);
		$data['page_html'] =  $this->_page_init($per_page);
	
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/apply.php', $data);
		$this->load->view('admin/footer.php');
	}
	
	private function _page_init($per_page, $recomand=0)
	{
		$this->load->library('pagination');
	
		$config['total_rows'] = $this->apply_m->get_num();
		$config['per_page'] = $per_page;
		$config['base_url'] = '/admin/apply/?';
		$config['num_links'] = 10;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	public function del() 
	{
		$id = (int) $this->input->get('id');
		if($id > 0) {
			$this->apply_m->del($id);
		}
		redirect('/admin/apply/');
	}
}