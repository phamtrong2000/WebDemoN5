$(document).ready(function(){
	$('.add-cart').click(function(e){
		e.preventDefault();
		var url = $(this).attr('href');
		$.ajax({
			url:url,
			type:'GET',
			success:function(res){
				$('#menucart').load(location.href + ' #menucart');
				$('#modal-msg').modal('show');
			}
		});
	});

});
var id_category;

 function EditCategory(ellemt){
	 var elmt_id = $(ellemt).parent().parent()['0'].children[0];
	 var id = $(elmt_id).text();
	 id_category = id;
	 $.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
	$.ajax({
		url:'edit_category/' + id,
		type:'get',
		dataType:'json',
		success:function(res){
			$('#name').val(res['cat']['name']);
			$('#modal-category').modal('show');
		}
	});
}
function SaveCategory(){
	$.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
	$.ajax({
		url:'ajax_add_category',
		type:'post',
		dataType:'json',
		data:{
			name: $('#category_name').val()
		},
		success:function(res){
			$('.table-hover').load(location.href + ' .table-hover>*');
		}
	});
}

function SaveEdit(){
	$.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	  });
	$.ajax({
		url:'ajax_edit_category/' + id_category,
		type:'post',
		dataType:'json',
		data:{
			name: $('#name').val()
		},
		success:function(res){
			$('.table-hover').load(location.href + ' .table-hover>*');
			$('#modal-category').modal('hide');
		}
	});
}

function delelteCategory(ellemt){
	var elmt_id = $(ellemt).parent().parent()['0'].children[0];
	 var id = $(elmt_id).text();
	  $.ajax({
		url:'delete_category/' + id,
		type:'get',
		dataType:'json',
		success:function(res){
			$('.table-hover').load(location.href + ' .table-hover>*');
		}
	});
}