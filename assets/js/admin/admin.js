

$(function(){


	//---------------- cat_rows --------------------//


	$('.delete_row').click(function(){
			var name = $(this).parent().parent().attr('id');
			$(this).parent().parent().remove();
				$.ajax({
				url:base_url+'admin/delete_row',
				type:'post',
				data:{name:name},
				success:function(answer){
					location.reload();
				}
			})		
		})

	
	$('.add_row').click(function(){
		$('.add_row_form').slideToggle(300)
		})
	
	$('.edit_row').click(function(){
		var id = $(this).parent().parent().attr('id');
		$('.row_id').attr('value' , id)
		$('.edit_row_form').slideToggle(300)
	})

	// $('.contact_but').click(function(){
		
	// })




	// $('#edit_but_tsa').click(function(){
	// 	var id = $(this).attr('name');
	// 	var inp1 = $(this).parent().children('#inp1').val();
	// 	$.ajax({
	// 			url:base_url+'admin/edit_row',
	// 			type:'post',
	// 			data:{id:id,inp1:inp1},
	// 			success:function(answer){
	// 				location.reload();
	// 			}
	// 		})
	// 	})


			
})






	
			

