<?php
	if(!defined('BASEPATH')) exit('Direct Access Not Allowed');
	class User extends My_Controller{
		function __construct(){
			parent::__construct();
		}
		// User Register Page
		function register(){
			$data['page_title']='User Register';
			$data['content_header']='User Register';
			// Load View
			$data['content_view']='front/user/register';
			$this->load->view('front/templates/front_template.php',$data);
		}
		// User Login Page
		function login(){
			$data['page_title']='User Login';
			$data['content_header']='User Login';
			// Load View
			$data['content_view']='front/user/login';
			$this->load->view('front/templates/front_template.php',$data);
		}
		// User Profile Page
		function profile(){
			$data['page_title']='User Profile';
			$data['content_header']='User Profile';
			// Load View
			$data['content_view']='front/user/profile';
			$this->load->view('front/templates/front_user_template.php',$data);
		}
		
		// User Downloads Page
		function downloads(){
			$data['page_title']='User Downloads';
			$data['content_header']='User Downloads';
			// Load View
			$data['content_view']='front/user/downloads';
			$this->load->view('front/templates/front_user_template.php',$data);
		}
		
		// User Favorites Page
		function favorites(){
			$data['page_title']='User Favorites';
			$data['content_header']='User Favorites';
			// Load View
			$data['content_view']='front/user/favorites';
			$this->load->view('front/templates/front_user_template.php',$data);
		}
	}
?>