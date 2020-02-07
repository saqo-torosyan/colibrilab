<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
       $this->load->model('admin_model');
	}

	public function index()
	{
		$isLogged = $this->session->userdata('admin');

		if(!isset($isLogged)) {
			$login = $this->input->post("log");
		    $pass  = $this->input->post("pass");

		    if (!empty($login) && !empty($pass)) {
		        if($this->admin_model->check_admin($login,md5($pass))){
                    $this->session->set_userdata('admin' , $login);
                    redirect(base_url('admin'));
		        }
		    } else {
		        $this->load->view('admin/admin_login');
		    }
		} else {
		    $this->load->_view('admin/admin_page');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('admin');
		redirect(base_url('admin'));
	}

	// -----------------  Categories ----------------------------//
	public function get_page($name)
	{
		$this -> session -> set_userdata('cat',"$name");
		$data['all'] = $this -> admin_model -> show_cat($name);
		$this->load->view("admin/inc/header");
		$this->load->view("admin/inc/categories");
		$this->load->view("admin/categories/$name", $data);
		$this->load->view("admin/inc/footer");
	}

	//-------------- Cat_rows --------------------------//
	public function add_row()
	{
		 // $cat_id = $this -> session -> userdata('cat');
		 
		 // $names = $this -> admin_model -> show_cat($cat_id);
		 // $cat_cols=[];
		 // foreach ($names[0] as $key => $value) {
		 // 	if($key!='id'){
		 // 		array_push($cat_cols, $key);
		 // 	}
		 	
		 // }
		 // // print_r($cat_cols);
		 // $cat_cols_values=[];
		 //  foreach ($cat_cols as $key => $value) {
		 //  	$a = $this -> input -> post($value);
		 //  	array_push($cat_cols_values, $a );
		 //  }
		  
		 // // print_r($cat_cols_values);
		 // $this -> admin_model -> add_cat_row($cat_cols_values);
		 // redirect(base_url("index.php/admin/get_page/$cat_id"));
		$cat_id = $this -> session -> userdata('cat');
		if($cat_id == 'sections'){
			$inp1 = $this -> input -> post("inp1");
			$inp2 = $this -> input -> post("inp2");
			$arr = [$inp1,$inp2];
			$this -> admin_model -> add_cat_row($arr);
			redirect(base_url('admin/get_page/sections'));
		}


		if($cat_id == 'portfolio'){
			$inp1 = $this -> input -> post("inp1");
			$inp2 = $this -> input -> post("inp2");
			$inp3 = $this -> input -> post("inp3");
			$logo=$_FILES['logo']['name'];
			$img=$_FILES['img']['name'];
			$arr = [$inp1,$inp2,$inp3,$logo,$img];
			move_uploaded_file($_FILES['logo']['tmp_name'], 'images/'.$_FILES['logo']['name']);
			move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
			$this -> admin_model -> add_cat_row($arr);
			redirect(base_url('admin/get_page/portfolio'));
		}

		if($cat_id == 'team'){
			$inp1 = $this -> input -> post("inp1");
			$inp2 = $this -> input -> post("inp2");
			$inp3 = $this -> input -> post("inp3");
			$inp4 = $this -> input -> post("inp4");
			$inp5 = $this -> input -> post("inp5");
			$arr = [$inp1,$inp2,$inp3,$inp4,$inp5];
			$this -> admin_model -> add_cat_row($arr);
			redirect(base_url('admin/get_page/team'));
		}


		if($cat_id == 'team_social_admin'){
			$inp1 = $this -> input -> post("inp1");
			$arr = [$inp1];
			$this -> admin_model -> add_cat_row($arr);
			redirect(base_url('admin/get_page/team_social_admin'));
		}




	}

	public function delete_row()
	{
		// $this -> admin_model -> delete_cat_row($name);
		// $cat_id = $this -> session -> userdata('cat');
		// $data['all'] = $this -> admin_model -> show_cat($cat_id);
		// $this -> load -> view('admin/admin_page', $data);

		$name = $this -> input -> post("name");
		$this -> admin_model -> delete_cat_row($name);

	}

	public function edit_row()
	{
		// $row = $this -> input -> post("name");
		// $id = $this -> input -> post("id");
		// $arr_row = explode(' ', $row);
		// unset($arr_row[count($arr_row)-1]);
		// unset($arr_row[0]);


		// $cat_cols =[];

		// $cat_id = $this -> session -> userdata('cat');
		// $names = $this -> admin_model -> show_cat($cat_id);

		// foreach ($names[0] as $key => $value) {
  //           if($key!='id') {
  //               array_push($cat_cols, $key);
  //           }	
  //       }

		// $arr1 = array_combine($cat_cols, $arr_row);

		// print_r($arr1);

		// $this -> admin_model -> edit_cat_row($arr1,$id);

		$cat_id = $this -> session -> userdata('cat');
		if($cat_id == 'team_social_admin'){
			$inp1 = $this -> input -> post("inp1");
			$id = $this -> input -> post("id");
			$arr = [$inp1];
		$this -> admin_model -> edit_cat_row($arr,$id);
		redirect(base_url('admin/get_page/team_social_admin'));
		}

		if($cat_id == 'team'){
			$id   = $this -> input -> post("id");
			$inp1 = $this -> input -> post("inp1");
			$inp2 = $this -> input -> post("inp2");
			$inp3 = $this -> input -> post("inp3");
			$inp4 = $this -> input -> post("inp4");
			$inp5 = $this -> input -> post("inp5");
			$arr  = [$inp1,$inp2,$inp3,$inp4,$inp5];
			$this -> admin_model -> edit_cat_row($arr,$id);
			redirect(base_url('admin/get_page/team'));
		}

		if($cat_id == 'sections'){
			$id   = $this -> input -> post("id");
			$inp1 = $this -> input -> post("inp1");
			$inp2 = $this -> input -> post("inp2");
			$arr = [$inp1,$inp2];
			$this -> admin_model -> edit_cat_row($arr,$id);
			redirect(base_url('admin/get_page/sections'));
		}

		if($cat_id == 'portfolio'){
			$id   = $this -> input -> post("id");
			$inp1 = $this -> input -> post("inp1");
			$inp2 = $this -> input -> post("inp2");
			$inp3 = $this -> input -> post("inp3");
			$logo = $_FILES['logo']['name'];
			$img  = $_FILES['img']['name'];
			$arr  = [$inp1,$inp2,$inp3,$logo,$img];
			move_uploaded_file($_FILES['logo']['tmp_name'], 'images/'.$_FILES['logo']['name']);
			move_uploaded_file($_FILES['img']['tmp_name'], 'images/'.$_FILES['img']['name']);
			$this -> admin_model -> edit_cat_row($arr,$id);
			redirect(base_url('admin/get_page/portfolio'));
		}

		if($cat_id == 'contacts'){
			$id   = $this -> input -> post('id');
			$inp1 = $this -> input -> post("name");
			$inp2 = $this -> input -> post("description");
			$inp3 = $this -> input -> post("address");
			$inp4 = $this -> input -> post("map_pointer");
			$inp5 = $this -> input -> post("phones");
			$inp6 = $this -> input -> post("working_hours");
			$inp7 = $this -> input -> post("email");

			if(!filter_var($inp7,FILTER_VALIDATE_EMAIL)){
			die('<span>invalide mail</span>');
			}			
				$arr  = [$inp1,$inp2,$inp3,$inp4,$inp5,$inp6,$inp7];
				$this -> admin_model -> edit_cat_row($arr,$id);
				redirect(base_url('admin/get_page/contacts'));
		}
	}

}
