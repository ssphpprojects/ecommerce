<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Admin extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// Admin Login
		function login(){
			$data['page_title']='Admin Login';
			$data['content_header']='Admin Login';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$this->load->view('admin/login',$data);
		}
		
		// Admin Dashboard
		function dashboard(){
			$data['page_title']='Admin Dashboard';
			$data['content_header']='Admin Dashboard';
			// Load View
			$data['content_view']='admin/dashboard';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		
	}
?>