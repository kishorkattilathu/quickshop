<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller 
{
	
	public function register()
	{
		$this->load->view('Admin/register');
	}

	public function admin_register()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('Password');
		$confirm=$this->input->post('confirm');

		$this->load->model('Admin_model');
		$count=$this->Admin_model->count_email_model($email);
		if ($count==0) 
		{
			
				
				if ($password==$confirm) 
				{
					
					$admindata=array('name'=>$name,'email'=>$email,'password'=>$password);
					$this->load->model('Admin_model');
					$execute=$this->Admin_model->admin_reg_model($admindata);
					if ($execute) 
					{
						echo "<script>alert('Successfully Registered')</script>";
						echo $this->login();
					}
					else
					{
						echo "<script>alert('Failed please try again later')</script>";
						echo $this->register();
					}
				}
					else
					{
						echo "<script>alert('Password doesnt match')</script>";
						echo $this->register();
					}
		}
		else
		{
			echo "<script>alert('Email Already Exist')</script>";
			$this->login();
		}
	}


	public function login()
	{
		$this->load->view('Admin/login');
	}

	public function admin_login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$logindata=array('email'=>$email,'password'=>$password);
				$this->load->model('Admin_model');
				$count=$this->Admin_model->admin_login_model($logindata);
				if ($count>0) 
				{
					echo "<script>alert('Welcome to Home page')</script>";
					$this->session->set_userdata('mail',$email);
					echo $this->home();
				}
				else
				{
					echo "<script>alert('Failed please try again')</script>";
					echo $this->login();
				}
	}

		public function home()
			{
				if ($this->session->has_userdata('mail')) {
					
				$this->load->model('Admin_model');
				$arrdata['customer_count']=$this->Admin_model->customer_count_model();
				$arrdata['category_count']=$this->Admin_model->category_count_model();
				$arrdata['product_count']=$this->Admin_model->product_count_model();
				$arrdata['Pendingcomplaint']=$this->Admin_model->Pendingcomplaint_count_model();

				$this->load->view('Admin/index',$arrdata);
				}
				else
				{
					return redirect('User_controller/index');
				}
				
			}
		
		public function profile()
		{
			if ($this->session->has_userdata('mail')) 
			{
			$this->load->model('Admin_model');
			$array['Admin']=$this->Admin_model->profile_fetch();
			$this->load->view('Admin/my_profile',$array);


			}
			else
			{
				return redirect('User_controller/index');
			}
		}
			
		

			public function admin_update()
			{
				$admin_id=$this->input->post('admin_id');
				$name=$this->input->post('name');
				$pass=$this->input->post('password');
				$update=array('name'=>$name,'password'=>$pass);
				$this->load->model('Admin_model');
				$execute=$this->Admin_model->profile_update_model($admin_id,$update);

				if ($execute) 
				{
					echo "<script>alert('successfully updated')</script>";
					$this->profile();
				}
				else
				{
					echo "<script>alert('failed please try again')</script>";
					$this->profile();
				}
			}
			
			public function addcat()
			{
				if ($this->session->has_userdata('mail')) 

				{
				$this->load->view('Admin/add_cat');
				}
				else
				{
					return redirect('User_controller/index');
				}
			}

			

			public function add_categories()
			{
				$catname=$this->input->post('catname');

				$image=$_FILES['cattype']['name'];
				$Image=explode('.',$image);
				$time=Time();
				$photo=$time.'.'.end($Image);

				$config['allowed_types']='jpg|png|jpeg';
				$config['upload_path']='./Assets/Admin/category';
				$config['file_name']=$photo;

				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				$this->load->model('Admin_model');
				$count=$this->Admin_model->cat_count_model($catname);
				if ($count==0) 
				{
					
				

					if ($this->upload->do_upload('cattype')) 
					{
						$cat=array('cat_name'=>$catname,'cat_image'=>$photo);
						$this->load->model('Admin_model');
						$execute=$this->Admin_model->add_categories_model($cat);
						if ($execute) 
						{
							echo "<script>alert('successfully added category')</script>";
							$this->addcat();
						}
						else
						{
							echo "<script>alert('failed try again')</script>";
							$this->addcat();
						}
					}
					else
					{
						echo "<script>alert('invalid image')</script>";
						$this->addcat();
					}
				}
				else
				{
					echo "<script>alert('Category Already Exist')</script>";
					$this->addcat();
				}

			}

			public function add_product()
			{
				if ($this->session->has_userdata('mail'))
				 {
					$this->load->model('Admin_model');
					$array['product']=$this->Admin_model->add_product_model();
					$this->load->view('Admin/add_product',$array);
				}
				else
				{
					return redirect('User_controller/index');
				}
			}

			

			public function managecat()
			{
				if ($this->session->has_userdata('mail')) 

				{
				$this->load->model('Admin_model');
				$array['manage']=$this->Admin_model->managecat_model();
				$this->load->view('Admin/managecat',$array);
				}
				else
				{
					return redirect('User_controller/index');
				}
				

			}
			public function edit_cat($id)
			{
				if ($this->session->has_userdata('mail')) 
				{
					$this->load->model('Admin_model');
					$array['cat_edit']=$this->Admin_model->edit_cat_model($id);

					$this->load->view('Admin/edit_cat',$array);
				}
				else
				{
					return redirect('User_controller/index');
				}
			}

			public function edit_categories()
		{
				$name=$this->input->post('catname');
				$id=$this->input->post('cat_id');

				$images=$_FILES['cattype']['name'];
				if ($images!='') 
			{
				$Images=explode('.',$images);
				$time=Time();
				$photo=$time.'.'.end($Images);

				$config['allowed_types']="png|jpeg|jpg";
				$config['upload_path']="./Assets/Admin/category";
				$config['file_name']=$photo;

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('cattype')) 
				{
					$update=array('cat_name'=>$name,'cat_image'=>$photo);
					$this->load->model('Admin_model');
					$execute=$this->Admin_model->edit_categories_model($id,$update);
					
					if ($execute) 
					{
						echo"<script>alert('updated successfully')</script>";
						$this->managecat();
					}
					else
					{
						echo"<script>alert('Failed please try again')</script>";
						$this->managecat();
					}
				}
				else
				{
					echo "<script>alert('Invalid Image')</script>";
					$this->managecat();
				}

			}
				else
				{
					$update=array('cat_name'=>$name);
					$this->load->model('Admin_model');
					$execute=$this->Admin_model->edit_categories_model($id,$update);
					if ($execute) 
					{

					echo"<script>alert('updated successfully')</script>";
						$this->managecat();
					}
					else
					{
						echo"<script>alert('Failed please try again')</script>";
						$this->managecat();
					}
				}


		}

			public function delete_cat($id)
			{
					$this->load->model('Admin_model');
				$execute=$this->Admin_model->delete_cat_model($id);
				if ($execute) 
				{
					echo "<script>alert('deleted successfully')<script>";
					$this->managecat();
				}
				else
				{
					echo "<script>alert('failed try again')</script>";
					$this->managecat();
				}
			}

			public function add_product_details()
			{	
				$cat_id=$this->input->post('category_id');
				$name=$this->input->post('name');
				$desc=$this->input->post('desc');
				$price=$this->input->post('price');

				$image=$_FILES['img']['name'];
				$Image=explode('.',$image);
				$time=Time();
				$photo=$time.'.'.end($Image);

				$config['allowed_types']="jpg|png|jpeg";
				$config['upload_path']='./Assets/Admin/product_img';
				$config['file_name']=$photo;

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('img')) 
				{
				
				$detail=array('category_id'=>$cat_id,'product_name'=>$name,
					'product_desc'=>$desc,'product_img'=>$photo,'product_price'=>$price);

				$this->load->model('Admin_model');
				$execute=$this->Admin_model->product_detail_model($detail);
				if ($execute) 
				{
					echo"<script>alert('Product Added successfully')</script>";
					$this->add_product();
				}
				else
				{
					echo "<script>alert('failed try again')</script>";
					$this->add_product();
				}
			 }
			 	else
			 		{
					 echo "<script>alert('wrong file try again')</script>";
					 $this->add_product();
					 }
			}

			public function manage_product()
			{	
				$this->load->model('Admin_model');

				$array['product']=$this->Admin_model->manage_product_model();

				$this->load->view('Admin/manage_product',$array);
			}

			public function edit_product($id)
			{	
				$this->load->model('Admin_model');
				
				$array['category']=$this->Admin_model->managecat_model();
				$array['edit_product']=$this->Admin_model->edit_product_model($id);

				$this->load->view('Admin/edit_product',$array);
			}


			public function delete_product($id)
			
			{
				$this->load->model('Admin_model');
				$execute=$this->Admin_model->delete_product_model($id);
				if ($execute) 
				{
					echo "<script>alert('Deleted successfully')</script>";
					$this->manage_product();
				}
				else
				{
					echo "<script>alert('Failed please try again')</script>";
					$this->manage_product();
				}
			}

			public function edit_product_details()
			{
						$cat_id=$this->input->post('cat_ids');
						$name=$this->input->post('name');
						$id=$this->input->post('product_id');
						$desc=$this->input->post('desc');
						$price=$this->input->post('price');

				$image=$_FILES['img']['name'];
				if ($image!='')
				{
					$Image=explode('.',$image);
					$time=Time();
					$photo=$time.'.'.end($Image);

					$config['allowed_types']="jpeg|png|jpg";
					$config['upload_path']='./Assets/Admin/product_img';
					$config['file_name']=$photo;

					$this->load->library('upload',$config);
					$this->upload->initialize($config);

					if ($this->upload->do_upload('img')) 
					{

						$product=array('category_id'=>$cat_id,'product_name'=>$name,'product_desc'=>$desc,
							'product_img'=>$photo,'product_price'=>$price);
						$this->load->model('Admin_model');
						$execute=$this->Admin_model->edit_pro_details_model($id,$product);
						if ($execute==1) 
						{
							echo "<script>alert('updated successfully')</script>";
							$this->manage_product();
						}
						else
						{
							echo "<script>alert('failed please try again')</script>";
							$this->manage_product();
						}
					}
						else
						{
							echo "<script>alert('wrong file try again')</script>";
							$this->manage_product();
						}	
						
						

				}
					else
					{	
						

						$product=array('category_id'=>$cat_id,'product_name'=>$name,
								'product_desc'=>$desc,'product_price'=>$price);

							$this->load->model('Admin_model');
							$execute=$this->Admin_model->edit_pro_details_model($id,$product);

						if ($execute) 
						{
							echo "<script>alert('updated successfully')</script>";
							$this->manage_product();
						}
						else
						{
							echo "<script>alert('Failed try again')</script>";
							$this->manage_product();
						}
				
					}

			}

		public function total_users()
		{
			$this->load->model('Admin_model');
			$array['users']=$this->Admin_model->total_users_model();

			$this->load->view('Admin/total_user',$array);
		}

		public function logout()
		{
			$this->session->sess_destroy();
			return redirect('User_controller/index');
		}

			public function complaint()
				{
					$email=$this->input->post('email');
					$name=$this->input->post('name');
					$message=$this->input->post('message');
					$data=array('c_email'=>$email,'c_name'=>$name,'c_message'=>$message,'c_reply'=>'Pending');

					$this->load->model('Admin_model');
					$execute=$this->Admin_model->complaint_model($data);
					
					if ($execute==1) 
					{
						echo "<script>alert('Complaint registered successfully')</script>";
						$this->load->view('User/index');
					}
					else
					{
						echo "<script>alert('Failed Please Try Again')</script>";
						$this->load->view('User/index');
					}
				}

		public function pending_complaints()
		{
			$this->load->model('Admin_model');
			$com['complaint']=$this->Admin_model->pending_complaint_model();

			$this->load->view('Admin/pending_complaints',$com);
		}

		public function reply_complaint($id)
		{
			$this->load->model('Admin_model');
			$data['reply']=$this->Admin_model->reply_complaint_model($id);

			$this->load->view('Admin/reply_complaint',$data);
		}

		public function reply ()
			{
				$complaint_id=$this->input->post('complaint_id');
					$reply=$this->input->post('reply');
				
					$data=array('c_reply'=>$reply);

					$this->load->model('Admin_model');
					$execute=$this->Admin_model->reply_model($data,$complaint_id);

					if ($execute) 
					{
						echo"<script>alert('Replied Successffully')</script>";
						$this->pending_complaints();
					}

			}

			public function delete_complaint($id)
			{
				$this->load->model('Admin_model');
				$execute=$this->Admin_model->delete_complaint_model($id);
				if ($execute) 
				{
					echo "<script>alert('Deleted Successfully')</script>";
					$this->pending_complaints();
				}

			}

			public function all_complaints()
			{
				$this->load->model('Admin_model');
				$data['complaints']=$this->Admin_model->all_complaints_model();
				$this->load->view('Admin/all_complaints',$data);
			}

			public function all_payments_details()
			{
				$this->load->model('Admin_model');
				$payment['paid'] = 	$this->Admin_model->all_payments_details_model();
				$this->load->view('Admin/all_payments',$payment);

			}
}
	













	