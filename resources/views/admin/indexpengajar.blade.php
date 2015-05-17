@extends('app')

@section('content')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Pengajar</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Id Pengajar</th>
					  <th>Nama Lengkap</th>
					  <th>Alamat</th>
					  <th>Kontak</th>
					  <th>Matkul</th>
					  <th>Status</th>
					  <th>Action</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($pengajars as $pengajar)
				<tr>
					<td>{{$pengajar->id_pengajar}}</td>
					<td>{{$pengajar->nama_pengajar}}</td>
					<td class="center">{{$pengajar->alamat_pengajar}}</td>
					<td class="center">{{$pengajar->kontak_pengajar}}</td>
					<td class="center">{{$pengajar->matkul_pengajar}}</td>
					<td class="center">
						<span class="label label-success">Active</span>
					</td>
					<td class="center">
						<a class="open-showPengajar btn btn-success" data-toggle="modal" href="#showPengajarDetails" data-id="{{$pengajar->id_pengajar}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="open-updatePengajar btn btn-info" data-toggle="modal" href="#updatePengajarDetails" data-id="{{$pengajar->id_pengajar}}">
							<i class="halflings-icon white edit"></i>  
						</a>
						<a class="open-deletePengajar btn btn-danger" data-toggle="modal" href="#deletePengajarDetails" data-id="{{$pengajar->id_pengajar}}">
							<i class="halflings-icon white trash"></i> 
						</a>
					</td>
				</tr>
				@endforeach
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

<div class="modal hide" id="deletePengajarDetails">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Hapus Pengajar</h3>
	</div>
	<div class="modal-body modal-body-show">
	<h2>Apakah Anda yakin menghapus data pengajar dibawah ini?</h2>
	<form action="deletepengajar" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<input type="hidden" name ="id_pengajar" id="pengajarId"></input>
	<h3 id="pengajarNama"></h3>
		<h4 id="pengajarAlamat"></h4>
		<p id="pengajarkontak"></p>
		<p id="pengajarGaji"></p>
		<table class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  <th>Id Murid</th>
				  <th>Nama Lengkap</th>
				  <th>Alamat</th>
				  <th>Kontak</th>
			  </tr>
		  </thead>   
		  <tbody id="pengajarMuridnya">
		  </tbody>
	  </table>
	<button type="submit" class="btn btn-primary">Hapus</button>            
	</div>
	<div class="modal-footer">
 		<a href="#" class="btn" data-dismiss="modal">Keluar</a>
	</div>
	</form>
</div>

<div class="modal hide" id="showPengajarDetails">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Data Pengajar</h3>
	</div>
	<div class="modal-body modal-body-show">
		<h3 id="pengajarNama"></h3>
		<h4 id="pengajarAlamat"></h4>
		<p id="pengajarkontak"></p>
		<p id="pengajarGaji"></p>
		<table class="table table-striped table-bordered">
		  <thead>
			  <tr>
				  <th>Id Murid</th>
				  <th>Nama Lengkap</th>
				  <th>Alamat</th>
				  <th>Kontak</th>
			  </tr>
		  </thead>   
		  <tbody id="pengajarMuridnya">
		  </tbody>
	  </table>            
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
	</div>
</div>

<div class="modal hide" id="updatePengajarDetails">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3>Update Pengajar</h3>
	</div>
	<div class="modal-body modal-body-update">
			<div class="box-content">
				<form class="form-horizontal" action="updatepengajar" method="post">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<input id="pengajarId" type="hidden" name="id_pengajar">	
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Nama Lengkap</label>
						<div class="controls">							
						  <input class="input-xlarge focused" id="pengajarNama" type="text" name="nama">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Alamat</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="pengajarAlamat" type="text" name="alamat">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Kontak</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="pengajarKontak" type="text" name="kontak">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="selectError">Mata Kuliah</label>
						<div class="controls">
						  <select id="selectError" data-rel="chosen" name="matkul">
							<option id="kalkulus">Kalkulus</option>
							<option id="fisikadasar">Fisika Dasar</option>
							<option id="kimiadasar">Kimia Dasar</option>
							<option id="pti">PTI</option>
							<option id="par">PAR</option>
						  </select>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" class="btn btn-primary">Ubahkan</button>
					  </div>
					</fieldset>
				  </form>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
	</div>
</div>

<script>
	$(document).on("click", ".open-deletePengajar", function () {
	 var myBookId = $(this).data('id');
	 var formURL = "showpengajar/"+myBookId;
	 $.getJSON( formURL, {
	    format: "json"
	  })
	    .done(function( data ) {
		 $(".modal-body #pengajarId").val(data[0].id_pengajar);
		 $(".modal-body #pengajarNama").html(data[0].nama_pengajar);
		 $(".modal-body #pengajarAlamat").html("Alamat : "+data[0].alamat_pengajar);		 	    	
		 $(".modal-body #pengajarKontak").html("Nomor Telepon : "+data[0].kontak_pengajar);	 	    	
		 $(".modal-body #pengajarGaji").html("Gaji : "+data[0].gaji);
		 $(".modal-body #pengajarMuridnya").html("");
		 console.log("matkul = "+data[0].matkul_pengajar);
		 if (data[0].matkul_pengajar=="Kalkulus")
		 {
		 	$("#kalkulus").attr("selected","selected");
		 }
		 else if (data[0].matkul_pengajar=="Fisika")
		 {
			 console.log('Huba');
		 	$('select option:contains("Fisika Dasar")').prop('selected',true);
		 }
		 else if (data[0].matkul_pengajar=="Kimia")
		 {
		 	$("#kimiadasar").attr("selected","selected");
		 }
		 else if (data[0].matkul_pengajar=="PTI")
		 {
		 	$("#pti").attr("selected","selected");
		 }
		 $.each(data, function(i, obj) {
			  //use obj.id and obj.name here, for example:
			 $(".modal-body #pengajarMuridnya").append("<tr>"+
				"<td>"+obj.id_murid+"</td>"
				+"<td>"+obj.nama_murid+"</td>"+
				"<td class=\"center\">"+obj.alamat_murid+"</td>"+
				"<td class=\"center\">"+obj.kontak_murid+"</td>"
			+"</tr>");			  
			});

	    });
});
</script>

<script>
	$(document).on("click", ".open-showPengajar", function () {
	 var myBookId = $(this).data('id');
	 console.log('Huba');
	 console.log(myBookId);
	 var formURL = "showpengajar/"+myBookId;
	 $(".modal-body-show #pengajarId").html(myBookId);
	 $.getJSON( formURL, {
	    format: "json"
	  })
	    .done(function( data ) {
		 $(".modal-body #pengajarId").val(data[0].id_pengajar);
		 $(".modal-body #pengajarNama").html(data[0].nama_pengajar);
		 $(".modal-body #pengajarAlamat").html("Alamat : "+data[0].alamat_pengajar);		 	    	
		 $(".modal-body #pengajarKontak").html("Nomor Telepon : "+data[0].kontak_pengajar);	 	    	
		 $(".modal-body #pengajarGaji").html("Gaji : "+data[0].gaji);
		 $(".modal-body #pengajarMuridnya").html("");
		 $.each(data, function(i, obj) {
			  //use obj.id and obj.name here, for example:
			 $(".modal-body #pengajarMuridnya").append("<tr>"+
				"<td>"+obj.id_murid+"</td>"
				+"<td>"+obj.nama_murid+"</td>"+
				"<td class=\"center\">"+obj.alamat_murid+"</td>"+
				"<td class=\"center\">"+obj.kontak_murid+"</td>"
			+"</tr>");			  
			});

	    });
});
</script>

<script>
	$(document).on("click", ".open-updatePengajar", function () {
	 var myBookId = $(this).data('id');
	 var formURL = "showpengajar/"+myBookId;
	 $(".modal-body-update #pengajarId").html(myBookId);
	 $.getJSON( formURL, {
	    format: "json"
	  })
	    .done(function( data ) {
		 $(".modal-body #pengajarId").val(data[0].id_pengajar);
		 $(".modal-body #pengajarNama").val(data[0].nama_pengajar);
		 $(".modal-body #pengajarAlamat").val(data[0].alamat_pengajar);		 	    	
		 $(".modal-body #pengajarKontak").val(data[0].kontak_pengajar);	 	    	
		 $(".modal-body #pengajarGaji").val(data[0].gaji);
		 $(".modal-body #pengajarMuridnya").html("");
		 console.log("matkul = "+data[0].matkul_pengajar);
		 if (data[0].matkul_pengajar=="Kalkulus")
		 {
		 	$(".modal-body #kalkulus").attr("selected","selected");
		 }
		 else if (data[0].matkul_pengajar=="Fisika")
		 {
			 console.log('Huba');
		 	$(".modal-body #fisikadasar").attr("selected","selected");
		 }
		 else if (data[0].matkul_pengajar=="Kimia")
		 {
		 	$(".modal-body #kimiadasar").attr("selected","selected");
		 }
		 else if (data[0].matkul_pengajar=="PTI")
		 {
		 	$(".modal-body#pti").attr("selected","selected");
		 }
		 $.each(data, function(i, obj) {
			  //use obj.id and obj.name here, for example:
			 $(".modal-body #pengajarMuridnya").append("<tr>"+
				"<td>"+obj.id_murid+"</td>"
				+"<td>"+obj.nama_murid+"</td>"+
				"<td class=\"center\">"+obj.alamat_murid+"</td>"+
				"<td class=\"center\">"+obj.kontak_murid+"</td>"
			+"</tr>");			  
			});

	    });
});
</script>

@endsection
