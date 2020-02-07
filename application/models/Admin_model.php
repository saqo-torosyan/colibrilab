
<?php
class Admin_model extends CI_Model{
	public function check_admin($log,$pass){

			return $this -> db -> get_where('admin',array('username' => $log,'password' => $pass)) -> num_rows();
		}




	//----------------- Categoires --------------------//


		public function show_cat($name){
			
			if (in_array($name, ['home', 'about', 'services'])) {

			    $this->db->where("t.title",$name)
			             ->join('sections_details as t1', 't.id = t1.id', 'left')
			             ->join('sections_details_images as t2', 't.id = t2.id', 'left');

			    $query = $this->db->get("sections as t");
			} else {
				if ($name == 'team') {
				    $this->db->join('team_social as t1', 't.id = t1.id', 'left');
			    }
			 
			    $query = $this -> db -> get("$name as t");
			} 

			return $query -> result_array();
		}



		//--------------- Cat_rows ------------------//

		public function delete_cat_row($name){
			$cat_id = $this -> session -> userdata('cat');
			$this-> db -> delete("$cat_id", array('id' => "$name"));
		}

		public function add_cat_row($arr=[]){


			$cat_id = $this -> session -> userdata('cat');
			if($cat_id == 'sections'){
				$arr1 = array(
				'id' => 'NULL',
				'title' => "$arr[0]",
				'link' => "$arr[1]",
				'created_at' => 'NULL'
			);
				$this->db->insert("$cat_id", $arr1);
			}

			//--------------------------------//


			if($cat_id == 'portfolio'){
				$arr1 = array(
				'id' => 'NULL',
				'name' => "$arr[0]",
				'description' => "$arr[1]",
				'link' => "$arr[2]",
				'logo' => "$arr[3]",
				'image' => "$arr[4]"
			);
				$this->db->insert("$cat_id", $arr1);
			}

			//--------------------------------//

			if($cat_id == 'team'){
				$arr1 = array(
				'id' => 'NULL',
				'e_mail' => "$arr[0]",
				'first_name' => "$arr[1]",
				'last_name' => "$arr[2]",
				'description' => "$arr[3]",
				'position' => "$arr[4]",
				'created_at' => "NULL"
			);
				$this->db->insert("$cat_id", $arr1);
			}

			//--------------------------------//


			if($cat_id == 'team_social_admin'){
				$arr1 = array(
				'id' => 'NULL',
				'name' => "$arr[0]"
			);
				$this->db->insert("$cat_id", $arr1);
			}


			
		}






		public function edit_cat_row($arr=[],$id)
		{
			$cat_id = $this -> session -> userdata('cat');
			if($cat_id == 'team_social_admin'){
				$arr1 = array(
					'name' => "$arr[0]"
				);
				$this->db->where('id', $id);
				$this->db->update("$cat_id", $arr1);
			}

			//--------------------------------//

			if($cat_id == 'team'){
				$arr1 = array(
					'e_mail' => "$arr[0]",
					'first_name' => "$arr[1]",
					'last_name' => "$arr[2]",
					'description' => "$arr[3]",
					'position' => "$arr[4]",
					'created_at' => "NULL"
				);
				$this->db->where('id', $id);
				$this->db->update("$cat_id", $arr1);
			}

			//--------------------------------//

			if($cat_id == 'sections'){
				$arr1 = array(
				'title' => "$arr[0]",
				'link' => "$arr[1]",
				'created_at' => 'NULL'
			);
				$this->db->where('id', $id);
				$this->db->update("$cat_id", $arr1);
			}

			//--------------------------------//

			if($cat_id == 'portfolio'){
				$arr1 = array(
					'name' => "$arr[0]",
					'description' => "$arr[1]",
					'link' => "$arr[2]",
					'logo' => "$arr[3]",
					'image' => "$arr[4]"
				);
				$this->db->where('id', $id);
				$this->db->update("$cat_id", $arr1);
			}

			//--------------------------------//

			if($cat_id == 'contacts'){
				$arr1 = array(
					'name' => "$arr[0]",
					'description' => "$arr[1]",
					'address' => "$arr[2]",
					'map_pointer' => "$arr[3]",
					'phones' => "$arr[4]",
					'working_hours' => "$arr[5]",
					'email' => "$arr[6]",
				);
				$this->db->where('id', $id);
				$this->db->update("$cat_id", $arr1);
			}
			
		}


		
}
