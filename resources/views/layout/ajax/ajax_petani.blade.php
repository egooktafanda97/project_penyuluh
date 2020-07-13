<script type="text/javascript">
	$('#card-petani').hide();
	function save_petani() {
		var urls = (($('#sav').text() == 'Edit')?"{{ route('edit_petani.post') }}":"{{ route('save_petani.post') }}")
		var nik 	= $('#nik').val();	
		var nama 	= $('#nama').val();
		var jekel 	= (($('#radio_1').attr('checked') == true)?'laki-laki':'perempuan');
		var alamat 	= $('#alamat').val();
		var j_tani	= $('#jtani').val();
		var id = $('#inp_hidden').val();
		
		 $.ajax({
	          type : "POST",
	          url  : urls,
	           data: {
                   _token: '{!! csrf_token() !!}',
                   nik:nik,nama:nama,jekel:jekel,alamat:alamat,j_tani:j_tani,id:id
                 },
	          success: function(response){
	          	if(response){
	          		// console.log(response);
	          		alertSuccess();
	          	}else{
	          		alertGagal();
	          	}
	          }
	      });
	}

	$('.edit_p').click(function() {
		var data = $(this).data('all');
		// console.log(data);
		$('#nik').val(data['nik']);	
		$('#nama').val(data['nama']);
		((data['jekel'] == 'laki-laki')?$('#radio_1').attr('checked', true):$('#radio_2').attr('checked', true));
		$('#alamat').val(data['alamat']);
		$('#jtani').val(data['j_tani']);

		$('#sav').html("Edit");
		$('#inp_hidden').val(data['id_petani']);

	});

	$('.hapus_p').click(function() {
		var id = $(this).data('id');

		swal({

			title: "Yakin !!!",
			text: "Anda Akan Menghapus Data",
			icon : "warning",
			buttons: true,
            warningMode: true,	
		}).then((value) => {;
			if(value === true){
				$.ajax({
		          type : "POST",
		          url  : "{{ route('delete_petani.post') }}",
		           data: {
	                   _token: '{!! csrf_token() !!}',id:id
	                 },
		            success: function(response){
		          	if(response){
		          		alertSuccess();
		          	}else{
		          		alertGagal();
		          	}
		          }
		      });
			}
		  
		});

		
	});





	
</script>
