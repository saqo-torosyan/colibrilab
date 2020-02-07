

	<div class="contact_form">
			<form method="post" action="<?=base_url('admin/edit_row')?>">
				<center>
				<?php
				$id = $all[0]['id'];
						echo "<input type='text' name='id' value='$id' class='row_id'>";
					foreach ($all[0] as $key => $value) {
						if($key != 'id'){
							echo '<h4 class="inp_name">'.$key.'</h4>';
							echo "<input type='text'  class='contact_form_inp' name='$key' placeholder='$key' value='$value'><br>";
						}
            		}

			?>
			<button class="contact_but btn btn-success">edit</button>
			</center>
		</form>

			</div>
		<?php
			// foreach ($all as  $value) {
			// 		$id=$value['id'];
			// 		echo "<tr id=$id>";
			// 		foreach ($value as $value1) {
			// 		echo '<td contenteditable>'.$value1.'</td>';
			// 		}
			// 			echo "<td> 
			// 			<button class='edit_row btn btn-warning'>edit</button>
			// 			</td>";
   //                 echo '</tr>';
   //                }
	 ?> 


	
			<div class="edit_row_form">
				<form method="post" action="<?=base_url('admin/edit_row')?>">
					<input type="text" name="id" class="row_id">
					<input type="text"  class="form_inp" name="inp1" placeholder="name"><br>
					<input  type="text" class="form_inp" name="inp2" placeholder="description"><br>
					<input  type="text" class="form_inp" name="inp3" placeholder="address"><br>
					<input  type="text" class="form_inp" name="inp4" placeholder="map_pointer"><br>
					<input  type="text" class="form_inp" name="inp5" placeholder="phones"><br>
					<input  type="text" class="form_inp" name="inp6" placeholder="working hour"><br>
					<input  type="text" class="form_inp" name="inp7" placeholder="email"><br>
					<button class="btn btn-success">edit</button>
				</form>
			</div>





