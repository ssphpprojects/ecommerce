<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Level extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// All
		function index(){
			$data['page_title']='Project Levels';
			$data['content_header']='Project Levels';
			// Load View
			$data['content_view']='admin/level/all';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		// Add
		function add(){
			$data['page_title']='Add Level';
			$data['content_header']='Add Level';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$data['content_view']='admin/level/add';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		
		// Edit
		function edit($cat_title,$cat_id){
			$data['page_title']='Edit Level';
			$data['content_header']='Edit Level';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$data['content_view']='admin/level/edit';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
	}
?>