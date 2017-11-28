<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Project extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// All
		function index(){
			$data['page_title']='All Projects';
			$data['content_header']='All Projects';
			// Load View
			$data['content_view']='admin/project/all';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		// Add
		function add(){
			$data['page_title']='Add Project';
			$data['content_header']='Add Project';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$data['content_view']='admin/project/add';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		
		// Edit
		function edit($cat_title,$cat_id){
			$data['page_title']='Edit Project';
			$data['content_header']='Edit Project';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$data['content_view']='admin/project/edit';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
	}
?>