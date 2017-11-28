<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Project extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// User Register Page
		function detail($project_title,$project_id){
			$project_title=urldecode($project_title);
			$data['page_title']=$project_title;
			$data['content_header']=$project_title;
			// Load View
			$data['content_view']='front/project/project-detail.php';
			$this->load->view('front/templates/front_template.php',$data);
		}
	}
?>