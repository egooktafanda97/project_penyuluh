<script type="text/javascript">
	$('#data-wilayah-penyuluh').hide();
	$('#data-Akun-penyuluh').hide();
	$('.back-card-penyuluh').click(function(){
		$('#data-wilayah-penyuluh').hide();
		$('#data-Akun-penyuluh').hide();
		$('#data-penyuluh').show();
	});
	$('.btn-wilayah').click(function() {
		$('#data-penyuluh').hide();
		$('#data-Akun-penyuluh').hide();
		$('#data-wilayah-penyuluh').show();
		
	});

	$('.btn-akun').click(function() {
		$('#data-penyuluh').hide();
		$('#data-wilayah-penyuluh').hide();
		$('#data-Akun-penyuluh').show();
		/* Act on the event */
	});
	
	function save_penyuluh() {
		var urls = (($('#sav').text() == 'Edit')?"{{ route('edit_penyuluh.post') }}":"{{ route('save_penyuluh.post') }}")
		var nik 	= $('#nik').val();	
		var nama 	= $('#nama').val();
		var agama   = $('#agama').val();
		var jekel 	= (($('#radio_1').attr('checked') == true)?'laki-laki':'perempuan');
		var alamat 	= $('#alamat').val();
		var id = $('#inp_hidden').val();


		
		 $.ajax({
	          type : "POST",
	          url  : urls,
	           data: {
                   _token: '{!! csrf_token() !!}',
                   nik:nik,nama:nama,jekel:jekel,agama:agama,alamat:alamat,wilayah:wilayah,id:id
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

	$('.edit_p').click(function() {
		var data = $(this).data('all');
		// console.log(data);
		$('#nik').val(data['nik']);	
		$('#nama').val(data['nama']);
		((data['jekel'] == 'laki-laki')?$('#radio_1').attr('checked', true):$('#radio_2').attr('checked', true));
		$('#alamat').val(data['alamat']);
		$('#agama').val(data['agama']);
		$('#sav').html("Edit");
		$('#inp_hidden').val(data['id_penyuluh']);

	});

	$('.hapus_p').click(function() {
		var id = $(this).data('id');

		swal("Yakin !!!", "Anda Akan Menghapus Data", "warning", {
			
		}).then((value) => {
			$.ajax({
	          type : "POST",
	          url  : "{{ route('delete_penyuluh.post') }}",
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

		  
		});

		
	});

</script>