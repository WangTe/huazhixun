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
		$data['form_url'] = '/admin/config/edit';
		
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
		$address = $this->input->post('address', TRUE);
		$phone = $this->input->post('phone', TRUE);
		$fax = $this->input->post('fax', TRUE);
		$qq = $this->input->post('qq', TRUE);

		$this->config_m->set_item('address', 'xxxxxx');
		$this->config_m->set_item('phone', 'xxxxxx');
		$this->config_m->set_item('fax', 'xxxxxx');
		$this->config_m->set_item('qq', 'xxxxxx');
				
		$this->config_m->set_item( 'address',$address);
		$this->config_m->set_item('phone',$phone );
		$this->config_m->set_item('fax',$fax );
		$this->config_m->set_item('qq',$qq );
		
		redirect('d=admin&c=config');
	}
}