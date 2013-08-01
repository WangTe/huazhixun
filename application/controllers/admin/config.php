<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 配置管理的控制类
 * 
 * @author 风格独特
 */

class Config extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=index');
		}
		$this->load->model('config_m');
		$this->load->helper('form');
	}
	
	public function index() 
	{		
		$data['form_url'] = 'd=admin&c=config';
		 
		$this->config_m->set_item('address', 'xxxxxx');		
		$this->config_m->set_item('phone', 'xxxxxx');		 
		$this->config_m->set_item('fax', 'xxxxxx');		
		$this->config_m->set_item('qq', 'xxxxxx');
		
		$data['address'] =$this->config_m->item('address');
		$data['phone'] = $this->config_m->item('phone');
		$data['fax'] =	$this->config_m->item('fax');
		$data['qq'] = $this->config_m->item('qq');	
		
		$this->load->view('admin/header.php', array('username' => $this->admin_user_m->user->username));
		$this->load->view('admin/left_navi.php');
		$this->load->view('admin/config.php', $data);
		$this->load->view('admin/footer.php');
	}	

	public function edit() 
	{
		$id = (int) $this->input->get('id');
		$data['item'] = $this->input->post('item', TRUE);
		$data['value'] = $this->input->post('value', TRUE);
		if( $data['type'] === FALSE || $data['content'] === FALSE) {
			redirect('d=admin&c=config');
		}//type,content
		$this->config_m->edit($id, $data);
		redirect('d=admin&c=config');
	}	
}