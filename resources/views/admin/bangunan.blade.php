@extends('admin/app')

@section('content')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Daftar Semua Peruntukan Lahan</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Nomor Kecamatan</th>
					  <th>Nama Kecamatan</th>
					  <th>Peruntukan lahan</th>
					  <th>Aksi</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($permohonans as $permohonan)						
				<tr>
					<td>{{$permohonan->id_kecamatan}}</td>
					<td class="center">{{$permohonan->nama_kecamatan}}</td>
					<td class="center">{{$permohonan->peruntukkan}}</td>
					<td class="center">
						@if ($permohonan->peruntukkan!='')
						<a class="open-updatebangunan btn btn-info" data-toggle="modal" href="#updatebangunandetails" data-idfirst="{{$permohonan->id_kecamatan}}" data-idsec="{{$permohonan->id_peruntukkan}}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="open-deletebangunan btn btn-danger" href="deletebangunan/{{$permohonan->id_kecamatan}}/{{$permohonan->id_peruntukkan}}">
							<i class="halflings-icon white trash"></i> 
						</a>
						@endif
					</td>
				</tr>
				@endforeach
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

<div class="modal hide" id="updatebangunandetails">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Update Peruntukan Lahan</h3>
	</div>
	<div class="modal-body modal-body-update">
			<div class="box-content">
				<form class="form-horizontal" action="updateperuntukkan" method="post">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input id="id_kecamatan" type="hidden" name="id_kecamatan">	
					<input id="id_peruntukkan" type="hidden" name="id_peruntukkan">	
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Nama Kecamatan</label>
						<div class="controls">							
						  <input class="input-xlarge focused" id="namakecamatan" type="text" name="nama" disabled>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Peruntukan Lahan</label>
						<div class="controls">
					      <select id="kecamatan" class="form-control" name="peruntukkan" required>
					      	@foreach ($peruntukkans as $peruntukkan)
					      	<option>{{$peruntukkan->peruntukkan}}</option>
					      	@endforeach
					      </select>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" class="btn btn-primary">Ubah</button>
					  </div>
					</fieldset>
				  </form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
	</div>
</div>

<script>
	$(document).on("click", ".open-updatebangunan", function () {
	 var myBookId1 = $(this).data('idfirst');
	 var myBookId2 = $(this).data('idsec');
	 var formURL = "showperuntukkan/"+myBookId1;
	 $(".modal-body-update #id_kecamatan").val(myBookId1);
	 $(".modal-body-update #id_peruntukkan").val(myBookId2);
	 $.getJSON( formURL, {
	    format: "json"
	  })
	    .done(function( data ) {
		 $(".modal-body #namakecamatan").val(data[0].nama_kecamatan);
	    });
});
</script>

@endsection
