<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class Home extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// Home Page
		function index(){
			$data['page_title']='Home Page';
			$data['content_header']='Latest Products';
			// Load View
			$data['content_view']='front/home';
			$this->load->view('front/templates/front_template.php',$data);
		}
		
		// All Category Page
		function allcategory(){
			$data['page_title']='All Category';
			$data['content_header']='All Category';
			// Load View
			$data['content_view']='front/category';
			$this->load->view('front/templates/front_template.php',$data);
		}
		
		// Specific Category Page
		function category($category,$cat_id){
			$data['page_title']=$category.' Category';
			$data['content_header']=$category.' Category';
			// Load View
			$data['content_view']='front/specific-category';
			$this->load->view('front/templates/front_template.php',$data);
		}
		
		// Specific Level Page
		function level($level,$level_id){
			$data['page_title']=$level.' Level';
			$data['content_header']=$level.' Level';
			// Load View
			$data['content_view']='front/specific-level';
			$this->load->view('front/templates/front_template.php',$data);
		}
		
		// Search Result Page
		function search(){
			$data['page_title']='Search Results for "'.$this->input->post('search').'"';
			$data['content_header']='Search Results for "'.$this->input->post('search').'"';
			// Load View
			$data['content_view']='front/search-result';
			$this->load->view('front/templates/front_template.php',$data);
		}
	}
?>