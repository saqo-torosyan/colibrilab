<div class="col-md-10">
	 <table class="table table-striped">
	<thead>
		<tr>
			<?php
			foreach ($all[0] as $key => $value) {
                    echo '<th>'.$key.'</th>';
                  }
                  
			?> 
			<th>
				<button class="add_row btn btn-success">ADD</button>
			</th>
			

	</thead>
	<tbody>
		<?php
			foreach ($all as  $value) {
					$id=$value['id'];
					echo "<tr id=$id>";
					foreach ($value as $value1) {
					echo '<td contenteditable>'.$value1.'</td>';
					}
						echo "<td> 
						<button class='edit_row btn btn-warning'>edit</button>
						<button class='delete_row btn btn-danger'>delete</button>
						</td>";
                   echo '</tr>';
                  }
		?>
	</tbody>
</table>
</div>
<div class="col-md-2">
	<div class="add_row_form">
				<form method="post" action="<?=base_url('admin/add_row')?>">
					<input type="text"  class="form_inp" name="inp1" placeholder="e-mail"><br>
					<input type="text" class="form_inp" name="inp2" placeholder="first name"><br>
					<input type="text"  class="form_inp" name="inp3" placeholder="last name"><br>
					<input type="text" class="form_inp" name="inp4" placeholder="description"><br>
					<input type="text" class="form_inp" name="inp5" placeholder="position"><br>
					<button class="btn btn-warning">add</button>
				</form>
			</div>
	<div class="edit_row_form">
				<form method="post" action="<?=base_url('admin/edit_row')?>">
					<input type="text" name="id" class="row_id">
					<input type="text"  class="form_inp" name="inp1" placeholder="e-mail"><br>
					<input type="text" class="form_inp" name="inp2" placeholder="first name"><br>
					<input type="text"  class="form_inp" name="inp3" placeholder="last name"><br>
					<input type="text" class="form_inp" name="inp4" placeholder="description"><br>
					<input type="text" class="form_inp" name="inp5" placeholder="position"><br>
					<button class="btn btn-success">edit</button>
				</form>
			</div>		
</div>