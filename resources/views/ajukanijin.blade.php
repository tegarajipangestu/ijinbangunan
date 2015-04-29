@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-6">
					<div class="contact_info">
			    	 	<h2>Peta Peruntukan</h2>
			    	 		<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56211042151!2d107.64315755000001!3d-6.903449449999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C+Bandung+City%2C+West+Java!5e0!3m2!1sen!2sid!4v1430168271061" width="100%" height="450" frameborder="0" style="border:0"></iframe>					   		</div>
      				</div>
      			<div class="company_ad">
				     	<h2>Dinas Tata Ruang dan Cipta Karya</h2>
      				<address>
						 <p>Jl.Cianjur No. 34 Bandung 40195</p>
						 <p>Telp. (022) 7217451</p>
				 	 	<p>E-mail : distarcip@bandung.go.id</p>
				   		<p>Ikuti Kami di : <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   	</address>
				   </div>
				</div>				
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Permohonan Ijin</h2>
					    <form method="post" action="permohonan">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">							
							<div>
						    	<span>Nama Lengkap</span>
						    	<input type="text" class="form-control" name="username" value="<?php echo $_COOKIE["username"] ?>" required>
						    </div>
						    <br>
						    <div class="row">
							    <div class="col-md-4">
							    	<div>
								    	<span>Luas Tanah (dalam meter persegi)</span>
								    	<input type="number" class="form-control" name="luas" required>
								    </div>
						    	</div>
<!-- 							    <div class="col-md-8">
								    <div>
								    	<span>Kategori (Pilih salah satu)</span>
								      <select id="peruntukan" class="form-control" name="kategori" required>
								      	@foreach ($peruntukans as $peruntukan)
								      	<option>{{$peruntukan->peruntukkan}}</option>
								      	@endforeach
								      </select>
								    </div>
							    </div>						    							    --> 	
						    </div>
						    <div>
						    	<span>Pemegang Hak</span>
						    	<span><input type="text" class="form-control" name="pemeganghak" required></span>
						    </div>
<!-- 						    <div>
						    	<span>Status Hak</span>
						    	<span><input type="text" class="form-control" name="statushak" required></span>
						    </div> -->
						    <div>
						    	<span>Alamat Lokasi</span>
						    	<span><input type="text" class="form-control" name="lokasi" required></span>
						    	<span>Kecamatan</span>
						      <select id="kecamatan" class="form-control" name="kecamatan" required>
						      	@foreach ($kecamatans as $kecamatan)
						      	<option>{{$kecamatan->nama_kecamatan}}</option>
						      	@endforeach
						      </select>
						    </div>
						    <br>
						    <div>
						    	<span>Daftar Peruntukan Lahan yang Tersedia</span>
						    	<div id="kecamatan1"><h4>Kecamatan Andir</h4></div>
						    	<div id="peruntukan1"><p>Pendidikan Negeri</p></div>
						      </select>
						    </div>
						    <br>
						    <div class="row">
							    <div class="col-md-6">
								    <div>
								    	<span>Peruntukan Lahan (Pilih salah satu)</span>
<!-- 								      <select id="peruntukan" class="form-control" name="kategori" required>
								      	@foreach ($peruntukans as $peruntukan)
								      	<option>{{$peruntukan->peruntukkan}}</option>
								      	@endforeach
								      </select> -->
								      	<select name="kategori" id="peruntukan" required class="form-control" >
								      		<!-- <option>Pilih salah satu</option> -->
								      	</select>
								    </div>
							    </div>
							    <div class="col-md-6">
							    	<span>Jenis Bangunan</span>
							    	<div>
									      <select class="form-control" name="jenis" required>
									        <option>Bangunan Permanen I</option>
									        <option>Bangunan Permanen II</option>
									        <option>Pagar/Halaman</option>
									        <option>Bangun-bangunan sesuai di Perda No. 14 Tahun 1998</option>
									        <option>Renovasi, Rehabilitasi dan Perbaikan Bangunan</option>
									        <option>Tarif Retribusi Ongkos Bongkar Bangunan</option>
									      </select>
							    	</div>							    	
							    </div>						    							    							    							    	
						    </div>
						   <div>
						   		<span><input type="submit" value="Tambah ijin"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>

<script>
	 $("#kecamatan").change(function () {
	 var kecamatan = this.value;
	$("#kecamatan1").html("");	    	
	$("#peruntukan").html("");
	$("#peruntukan1").html("");
	$("#kecamatan1").append("<h4> Kecamatan "+kecamatan+"</h4>");
	$("#peruntukan1").append("<p> Tunggu sesaat...</p>");
	 var formURL = "peruntukanlahan/"+kecamatan;

	 $.getJSON( formURL, {
	    format: "json"
	  })
	    .done(function( data ) {
	    	console.log(data);
		 // $("#peruntukanlahan").val(data[0].peruntukkan);
		$("#peruntukan").html("");
		$("#peruntukan1").html("");
			$("#peruntukan1").append("<p> Tidak ada peruntukan lahan</p>");			 
		 $.each(data, function(i, obj) {
			  //use obj.id and obj.name here, for example:
			//  $(".modal-body #pengajarMuridnya").append("<tr>"+
			// 	"<td>"+obj.id_murid+"</td>"
			// 	+"<td>"+obj.nama_murid+"</td>"+
			// 	"<td class=\"center\">"+obj.alamat_murid+"</td>"+
			// 	"<td class=\"center\">"+obj.kontak_murid+"</td>"
			// +"</tr>");
			 console.log(obj.peruntukkan);
			 console.log(kecamatan);
			 		$("#peruntukan1").html("");
			$("#peruntukan").append("<option>"+obj.peruntukkan+"</option>");			  
			$("#peruntukan1").append("<p>"+obj.peruntukkan+"</p>");			  
			});

	    });
    });
</script>
@stop