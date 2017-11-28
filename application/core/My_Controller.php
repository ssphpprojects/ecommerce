<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class My_Controller extends CI_Controller{
		function __construct(){
			parent::__construct();
			// Load Database
			$this->load->database();
			
			// Load Model Globally
			//$this->load->model('Admin/Admin_Model');
			$this->load->model('Admin/Category_Model');
			
			// Load Helpers
			$this->load->helper(array('url','form','language','security','captcha','pp_debug'));
			// Load Library
			$this->load->library('encryption');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->load->library('email'); 
			
			// Load Language
			$this->lang->load('en_admin','english');
			
			// Upload File Config
			$config['upload_path']          = './assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 1000;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;
			$this->load->library('upload', $config);
			
			// Form Validation Error Element
			$this->form_validation->set_error_delimiters('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>','</div>');
		}
	}
?>