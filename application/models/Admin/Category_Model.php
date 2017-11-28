<?php
	if(!defined('BASEPATH')) exit('Direct access not allowed');
	class Category_Model extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		// Count Data
		function countall(){
			return $this->db->count_all('pp_category');
		}
		// All Data
		function get_all(){
			$res=array();
			$query=$this->db->get('pp_category');
			if($query->num_rows()>0){
				$res['bool']=true;
				$res['allData']=$query->result_array();
			}else{
				$res['bool']=false;
			}
			return $res;
		}
		// One Data
		function get_one($data_id){
			$res=array();
			$this->db->where('cat_id',$data_id);
			$query=$this->db->get('pp_category');
			if($query->num_rows()>0){
				$res['bool']=true;
				$res['allData']=$query->row_array();
			}else{
				$res['bool']=false;
			}
			return $res;
		}
		// Add Data
		function add_data($img){
			$res=array();
			$data=array(
				'cat_title'=>$this->input->post('title'),
				'cat_slug'=>$this->input->post('slug'),
				'cat_desc'=>$this->input->post('desc'),
				'cat_img'=>$img
			);
			$query=$this->db->insert('pp_category',$data);
			if($this->db->affected_rows()>0){
				$res['bool']=true;
				$res['msg']=$this->session->set_flashdata('msg',$this->lang->line('added'));
			}else{
				$res['bool']=false;
				$res['msg']=$this->session->set_flashdata('msg',$this->lang->line('added_er'));
			}
			return $res;
		}
		// Edit Data
		function update_data($img,$data_id){
			$res=array();
			$data=array(
				'cat_title'=>$this->input->post('title'),
				'cat_slug'=>$this->input->post('slug'),
				'cat_desc'=>$this->input->post('desc'),
				'cat_img'=>$img
			);
			$this->db->where('cat_id',$data_id);
			$query=$this->db->update('pp_category',$data);
			if($this->db->affected_rows()>0){
				$res['bool']=true;
				$res['msg']=$this->session->set_flashdata('msg',$this->lang->line('updated'));
			}else{
				$res['bool']=false;
				$res['msg']=$this->session->set_flashdata('msg',$this->lang->line('updated_no'));
			}
			return $res;
		}
		// Delete Data
		function delete_data($data_id){
			$res=array();
			$this->db->where('cat_id',$data_id);
			$query=$this->db->delete('pp_category');
			if($this->db->affected_rows()>0){
				$res['bool']=true;
				$res['allData']=$query->row_array();
				$res['msg']=$this->session->set_flashdata('msg',$this->lang->line('deleted'));
			}else{
				$res['bool']=false;
				$res['msg']=$this->session->set_flashdata('msg',$this->lang->line('deleted_er'));
			}
			return $res;
		}
	}
?>