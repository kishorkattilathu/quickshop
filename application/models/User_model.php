<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model

{
	public function register_model($data)
	{
		return $this->db->insert('user',$data);
	}

	public function login_model($data)
	{
		$this->db->where($data);
		return $this->db->count_all_results('user');
	}
	public function user_profile_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$email);
		return $this->db->get()->result();
	}
	public function profile_update($email,$array)
	{	
		$this->db->where('user_email',$email);
		return $this->db->update('user',$array);
	}

	public function home_model()
	{
		$this->db->select('*');
		$this->db->from('categories');
		return $this->db->get()->result();
	}

	public function all_product_model($cat_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('category_id',$cat_id);
		return $this->db->get()->result();
	}

	public function single_page_model($single_product_id)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('product_id',$single_product_id);
		return $this->db->get()->result();
	}

	public function add_cart_model($add_cart)
	
	{
		return $this->db->insert('bookings',$add_cart);
	}

	public function my_cart_model()
	{
		
	
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('b_user_email',$email);
		$this->db->join('product','product.product_id=bookings.b_product_id');
		return $this->db->get()->result();
	}

	public function delete_cart_model($id)
	{
	        $this->db->where('booking_id',$id);
			return $this->db->delete('bookings');

	}

	public function pyment_model($payment)
	{
		return $this->db->insert('payment',$payment);
	}

	public function receipt_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->where('customer_email',$email);
		$this->db->join('user','user.user_email=payment.customer_email');
		return $this->db->get()->result();
	}

	

	// public function my_bookings_model($add_mybookings)
	// {
	// 	return $this->db->insert('my_bookings',$add_mybookings);
	// }

	public function my_bookings()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->select('*');
		$this->db->from('bookings');
		$this->db->where('b_user_email',$email);
		$this->db->join('product','product.product_id=bookings.b_product_id');
		return $this->db->get()->result();

	}
	public function count_email_model($email)
	{
		$this->db->where('user_email',$email);
		return $this->db->count_all_results('user');
	}

	public function paid_model()
	{
		$email=$this->session->userdata('user_mail');
		$this->db->where('b_user_email',$email);
		return $this->db->delete('bookings');

	}

	public function cart_count_model($pro_id)
	{
		$email=$this->session->userdata('user_mail');
		$this->db->where('b_product_id',$pro_id);
		$this->db->where('b_user_email',$email);
		return $this->db->count_all_results('bookings');

		
	}

	public function update_quantity_model($qty_update,$pro_id)
	{
		$email=$this->session->userdata('user_mail');
		$this->db->where('b_product_id',$pro_id);
		$this->db->where('b_user_email',$email);
		return $this->db->update('bookings',$qty_update);

	}
	public function complaint_insert_model($complaint)
	{
		return $this->db->insert('complaint',$complaint);
	}
}
