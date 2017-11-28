<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Tag extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// All
		function index(){
			$data['page_title']='Project Tags';
			$data['content_header']='Project Tags';
			// Load View
			$data['content_view']='admin/tag/all';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		// Add
		function add(){
			$data['page_title']='Add Tag';
			$data['content_header']='Add Tag';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$data['content_view']='admin/tag/add';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		
		// Edit
		function edit($cat_title,$cat_id){
			$data['page_title']='Edit Tag';
			$data['content_header']='Edit Tag';
			// Form Submit
			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required');
			if($this->form_validation->run()==true){
				
			}
			// Load View
			$data['content_view']='admin/tag/edit';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
	}
?>