<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{

	public function admin_reg_model($admindata)
	{
	return	$this->db->insert('admin',$admindata);
	}

	public function admin_login_model($logindata)
	{
		$this->db->where($logindata);
	return	$this->db->count_all_results('admin');
	}


	public function customer_count_model()
	{
		return $this->db->count_all_results('user');
	}
	public function category_count_model()
	{
		return $this->db->count_all_results('categories');
	}
	public function product_count_model()
	{
		return $this->db->count_all_results('product');
	}
	public function Pendingcomplaint_count_model()
	{
		$this->db->where('c_reply','Pending');
		return $this->db->count_all_results('complaint');
	}


	public function profile_fetch()
	{
		$email=$this->session->userdata('mail');

		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		return $this->db->get()->result();
	}
	
	public function profile_update_model($admin_id,$update)
	{
		$this->db->where('admin_id',$admin_id);
		return $this->db->update('admin',$update);
	}

	public function add_categories_model($cat)
	{
		return $this->db->insert('categories',$cat);
	}
	
	public function add_product_model()
	{
		$this->db->select('*');
		$this->db->from('categories');
		return $this->db->get()->result();
	}
	public function product_detail_model($detail)
	{
		return $this->db->insert('product',$detail);
	}

	public function managecat_model()
	{
		$this->db->select('*');
		$this->db->from('categories');
	 	return $this->db->get()->result();

	}

	public function edit_cat_model($id)
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('cat_id',$id);
		return $this->db->get()->result();
	}

	public function edit_categories_model($id,$update)
	{	
		$this->db->where('cat_id',$id);
		return $this->db->update('categories',$update);
	}
	public function delete_cat_model($id)
	{	
		
		$this->db->where('cat_id',$id);
		return $this->db->delete('categories');
	}

	public function manage_product_model()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('categories','categories.cat_id=product.category_id');
		return $this->db->get()->result();

	}

	public function edit_product_model($id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('product_id',$id);
		$this->db->join('categories','categories.cat_id=product.category_id');
		return $this->db->get()->result();
	}

	public function edit_pro_details_model($id,$product)
	{
		$this->db->where('product_id',$id);
		return $this->db->update('product',$product);
	}

	public function delete_product_model($id)
	{
		$this->db->where('product_id',$id);
		return $this->db->delete('product');
	}

	public function total_users_model()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result();
	}

	public function count_email_model($email)
	{
		$this->db->where('email',$email);
		return $this->db->count_all_results('admin');
	}

	public function cat_count_model($catname)
	{
		$this->db->where('cat_name',$catname);
		return $this->db->count_all_results('categories');
	}

	public function complaint_model($data)
	{
		return $this->db->insert('complaint',$data);
	}

    public function pending_complaint_model()
    {
    	$this->db->select('*');
    	$this->db->from('complaint');
    	$this->db->where('c_reply','Pending');
    	return $this->db->get()->result();
    }

    public function reply_complaint_model($id)
    {
    	$this->db->select('*');
    	$this->db->from('complaint');
    	$this->db->where('complaint_id',$id);
    	return $this->db->get()->result();
    }

    public function reply_model($data,$complaint_id)
    {
    		$this->db->where('complaint_id',$complaint_id);
    	return $this->db->update('complaint',$data);
    }

    public function delete_complaint_model($id)
    {
    	$this->db->where('complaint_id',$id);
    	return $this->db->delete('complaint');
    }

    public function all_complaints_model()
    {
    	$this->db->select('*');
    	$this->db->from('complaint');
    	// $this->db->where('c_reply','!Pending');
    	return $this->db->get()->result();
    }

    public function all_payments_details_model()
    {
    	$this->db->select('*');
    	$this->db->from('payment');
    	return $this->db->get()->result();
    }
}