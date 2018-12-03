$(document).ready(function($) {
	
	$(".edit-modal").click(function(event) {
		var btn = $(this).data()
		var nama = btn.namakaryawan
		var kelamin = $(this).data('kelaminkaryawan')
		var tempatlahir = $(this).data('tempatlahir')
		var id = $(this).data('id')
		var divisikaryawan = $(this).data('divisikaryawan')

		
		$("#modal-name").val(nama)
		$("#modal-divisi").val(divisikaryawan)
		$("#modal-tmpatlahir").val(tempatlahir)
		$("#modal-id").val(id)
	});	

	$("#modal-submit").click(function(event) {

		$.ajax({
			url: 'proses/proses_edit.php',
			type: 'POST',
			dataType: 'json',
			data: {
				nama:  $("#modal-name").val(),
				id:  $("#modal-id").val(),
				divisi: $("#modal-divisi").val(),
				tmpat_lahir: $("#modal-tmpatlahir").val(),
			}
		})
		
		
	})

});
