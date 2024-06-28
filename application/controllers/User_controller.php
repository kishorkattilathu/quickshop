<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller 
{
	public function index()
	{
		$this->load->view('User/index');
	}

	public function about_user()
	{
		$this->load->view('User/about');
	}

	public function contact_user()
	{
		$this->load->view('User/contact');
	}

	public function user_register()
	{	
		$this->load->view('User/register.php');
	}

	public function register()
	{
		 $name=$this->input->post('name');
		 $email=$this->input->post('email');
		 $mobile=$this->input->post('mobile');
		 $address=$this->input->post('address');
		 $password=$this->input->post('password');
		 $confirm=$this->input->post('confirm');
		 $this->load->model('User_model');
		 $count=$this->User_model->count_email_model($email);
		 if($count==0)
		 {
				if ($password==$confirm) 
				{
				$data=array('user_name'=>$name,'user_email'=>$email,'phone'=>$mobile,'address'=>$address,'password'=>$password);
				$this->load->model('User_model');
				$execute=$this->User_model->register_model($data);
				if ($execute==1) 
				{
					echo "<script>alert('Registered successfully')</script>";
					$this->index();
				}
				}
				else
				{
					echo "<script>alert('Password doesnt match')</script>";
					$this->user_register();
				}
		}
		else
		{
			echo "<script>alert('Already Registered')</script>";
					$this->index();
		}
	}

	public function login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=array('user_email'=>$email,'password'=>$password);
		$this->load->model('User_model');
		$count=$this->User_model->login_model($data);
		if ($count>0) 
		{
		echo "<script>alert('Login Successfully')</script>";
		$this->session->set_userdata('user_mail',$email);
		$this->home();
		}
		else
		{
			echo "<script>alert('failed please try again')</script>";
			$this->index();
		}

	}

	public function home()
	{
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$cat['categories']=$this->User_model->home_model();
			
		
			$this->load->view('User/home',$cat);
		}
		else
		{
			$this->index();
		}
	}

	public function profile()
	{	
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$array['profile']=$this->User_model->user_profile_model();

			$this->load->view('User/profile',$array);
		}
		else
		{
			$this->index();
		}
	}

	public function profile_update()
	{
		if ($this->session->has_userdata('user_mail')) 
		{	
			$email=$this->input->post('email');
			$name=$this->input->post('name');
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$password=$this->input->post('password');
			$array=array('user_name'=>$name,'phone'=>$phone,'password'=>$password,'address'=>$address);

			$this->load->model('User_model');
			$execute=$this->User_model->profile_update($email,$array);
			if ($execute==1) 
			{
				echo "<script>alert('Updated Successfully')</script>";
				$this->profile();
			}
			else
			{
				echo "<script>alert('Failed please try again')</script>";
				$this->profile();
			}
		}
		else
		{
			$this->index();
		}
	}

	public function allproducts($cat_id)
	{	
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$product['allproduct']=$this->User_model->all_product_model($cat_id);

			$this->load->view('User/all_products',$product);		
		}
		else
		{
			$this->index();
		}

	}

	public function single_page($single_product_id)
	{
		if ($this->session->has_userdata('user_mail')) 
		{
			$this->load->model('User_model');
			$single_product['single']=$this->User_model->single_page_model($single_product_id);
			$single_product['user']=$this->User_model->user_profile_model();

			$this->load->view('User/single_product',$single_product);
		}
		else
		{
			$this->index();
		}
	}

	public function add_cart()
	{
		if ($this->session->has_userdata('user_mail')) 
		{

			$email=$this->input->post('email');
			$user_id=$this->input->post('user_id');
			$pro_id=$this->input->post('pro_id');
			$price=$this->input->post('price');
			$quantity=$this->input->post('quantity');
			$total_price=$quantity*$price;

			$this->load->model('User_model');
			$count=$this->User_model->cart_count_model($pro_id);

			if ($count==0) 
			{
				
			

				$add_cart=array('b_user_email'=>$email,'b_user_id'=>$user_id,'b_product_id'=>$pro_id,'price'=>$price,'quantity'=>$quantity,'total_price'=>$total_price);

				$this->load->model('User_model');
				$execute=$this->User_model->add_cart_model($add_cart);

					if ($execute==1) 
					{
						

						echo "<script>alert('Added to cart successfully')</script>";
						$this->cart();
					}
					else
					{
						$this->home();
					}
			}
			else
			{
				$qty_update=array('quantity'=>$quantity,'total_price'=>$total_price);

				$this->load->model('User_model');
				$execute1=$this->User_model->update_quantity_model($qty_update,$pro_id);
				if ($execute1==1) 
				{
					
						echo "<script>alert('Added to cart successfully')</script>";
						$this->cart();
				}
					
				else
				{
						$this->home();
				}
			}

		}
		else
		{
			$this->index();
		}
	}

	
				public function cart()
				{
					if ($this->session->has_userdata('user_mail')) 
					{
						

						$this->load->model('User_model');
						$array['cart']=$this->User_model->my_cart_model();
						
						$this->load->view('User/my_cart',$array);
						
						
					}
					else
					{
						$this->index();
					}

				}


				public function delete_cart($id)
				{
					$this->load->model('User_model');
					$execute=$this->User_model->delete_cart_model($id);
					if ($execute==1) 
					{
						echo "<script>alert('Deleted Successfully')</script>";
						$this->cart();
					}
					else
					{
						echo "<script>alert('Failed Please try again')</script>";
						$this->cart();
					}
				}

				public function logout_user()
				{
					$this->session->sess_destroy();
					return redirect('User_controller/index');
				}

				public function checkout()
				{
					$this->load->model('User_model');
					$array['checkout']=$this->User_model->my_cart_model();

					$this->load->view('User/checkout',$array);

					}

				public function payment()
				{
					if ($this->session->has_userdata('user_mail')) 
					{
						$this->load->model('User_model');
						$array['payment']=$this->User_model->my_cart_model();

						$this->load->view('User/payment',$array);
					}
					else
					{
						$this->index();
					}
				}

				public function final_payment()
				{
					if ($this->session->has_userdata('user_mail')) 
					{
						$card_name=$this->input->post('card_name');
						$card_no=$this->input->post('card_no');
						$expiry_month=$this->input->post('expiry_month');
						$expiry_year=$this->input->post('expiry_year');
						$cvv=$this->input->post('cvv');
						$total_payment=$this->input->post('total_payment');
						$user_email=$this->input->post('user_email');
						$payment_date=date('Y-M-d');
						$payment= array('customer_email' =>$user_email,'card_name'=>$card_name,'card_number'=>$card_no,'expiry_month'=>$expiry_month,'expiry_year'=>$expiry_year,'cvv'=>$cvv,'total_payment'=>$total_payment,'payment_status'=>'Paid','payment_date'=>$payment_date);

						$this->load->model('User_model');
						$execute=$this->User_model->pyment_model($payment);

						if ($execute) 
						{
							
							
							echo "<script>alert('Paid successfully')</script>";
							$this->receipt();
						}
						else
						{
							echo "<script>alert('Failed please try again')</script>";
							$this->payment();
						}
					}
					else
					{
						$this->index();
					}

				}

				public function receipt()
				{
					if ($this->session->has_userdata('user_mail'))
					{
						$this->load->model('User_model');
						$data['payment']=$this->User_model->receipt_model();
		//				$data['pro_details']=$this->User_model->my_cart_model();
						$data['pro_details']=$this->User_model->my_bookings();

						$this->load->view('User/receipt',$data);
					}
					else
					{
						$this->index();
					}
				}

				public function total_receipts()
				
				{	
					if ($this->session->has_userdata('user_mail')) 
					{
						$this->load->model('User_model');
						$array['payment']=$this->User_model->receipt_model();
						$this->load->view('User/total_receipts',$array);
					}
					else
					{
						$this->index();
					}
				}

				public function clear_receipt()
				{	
					if ($this->session->has_userdata('user_mail'))
					{	
					
					$this->load->model('User_model');
					$execute=$this->User_model->paid_model();
					if ($execute==1) 
					{
						echo "<script>alert('Thanks For purchase')</script>";
						$this->home();
					}

					}
					else
					{
						$this->index();
					}
				}
				public function Complaints()
				{
					if ($this->session->has_userdata('user_mail')) 
					{
						$this->load->model('User_model');
						$array['user']=$this->User_model->user_profile_model();
						$this->load->model('Admin_model');
						$array['complaints']=$this->Admin_model->all_complaints_model();
						$this->load->view('User/Complaints',$array);
					}
					else
					{
						$this->index();
					}
				}
				public function complaint_insert()
				{
					$name=$this->input->post('name');
						$email=$this->input->post('email');
						$complaint=$this->input->post('complaint');
						
						$complaint= array('c_name'=>$name,'c_email'=>$email,'c_message'=>$complaint,'c_reply'=>'Pending');

						$this->load->model('User_model');
						$execute=$this->User_model->complaint_insert_model($complaint);

						if ($execute) 
						{
							
							
							echo "<script>alert('Your Complaint was Added..')</script>";
							$this->Complaints();
						}
						else
						{
							echo "<script>alert('Failed please try again')</script>";
							$this->Complaints();
						}
				}

			
	
}