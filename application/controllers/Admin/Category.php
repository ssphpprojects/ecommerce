<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Category extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// All
		function index(){
			$data['page_title']='Project Categories';
			$data['content_header']='Project Categories';
			// Load View
			$data['content_view']='admin/category/all';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		// Add
		function add(){
			$data['page_title']='Add Category';
			$data['content_header']='Add Category';
			// Form Submit
			$this->form_validation->set_rules('title','Title','trim|required');
			$this->form_validation->set_rules('slug','Slug','trim|required');
			$this->form_validation->set_rules('desc','Description','trim|required');
			if($this->form_validation->run()==true){
				if($this->upload->do_upload('img')){
					$imgData=$this->upload->data();
					$this->Category_Model->add_data($imgData['file_name']);
				}else{
					$this->session->set_flashdata('msg',$this->lang->line('upload_er'));
				}
			}
			// Load View
			$data['content_view']='admin/category/add';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		
		// Edit
		function edit($cat_title,$cat_id){
			$data['page_title']='Edit Category';
			$data['content_header']='Edit Category';
			// Form Submit
			$this->form_validation->set_rules('title','Title','trim|required');
			$this->form_validation->set_rules('slug','Slug','trim|required');
			$this->form_validation->set_rules('desc','Description','trim|required');
			if($this->form_validation->run()==true){
				if($this->upload->do_upload('img')){
					$imgData=$this->upload->data();
					$this->Category_Model->update_data($imgData['file_name'],$cat_id);
				}else{
					$this->Category_Model->update_data($this->input->post('img'),$cat_id);
				}
			}
			$data['content_data']=$this->Category_Model->get_one($cat_id);
			// Load View
			$data['content_view']='admin/category/edit';
			$this->load->view('admin/templates/admin_template.php',$data);
		}
		
		// Delete
		function delete($cat_id){
			$this->Category_Model->delete_data($cat_id);
			redirect('admin/category');
		}
	}
?>