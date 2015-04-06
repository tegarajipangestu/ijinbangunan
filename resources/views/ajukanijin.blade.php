@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
					<div class="contact_info">
			    	 	<h2>Peta Peruntukan</h2>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">Tampilkan peta lebih besar</a></small>
					   		</div>
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
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Permohonan Ijin</h2>
					    <form method="post" action="permohonan">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">							
							<div>
						    	<span>Nama Lengkap</span>
						    	<input type="text" class="form-control" name="username" required>
						    </div>
						    <div class="row">
							    <div class="col-md-4">
							    	<div>
								    	<span>Luas Tanah (dalam meter persegi)</span>
								    	<input type="number" class="form-control" name="luas" required>
								    </div>
						    	</div>
							    <div class="col-md-8">
								    <div>
								    	<span>Kategori (Pilih salah satu)</span>
									      <select class="form-control" name="kategori" required>
									        <option>Pagar</option>
									        <option>SPBU</option>
									        <option>IPA</option>
									        <option>Sumur</option>
									        <option>Reservoir</option>
									        <option>Menara</option>
									        <option>Kolam Renang</option>
									        <option>Jembatan</option>
									        <option>Bangunan</option>
									        <option>Bangunan Reklame</option>
									        <option>Lapangan Olahraga</option>	
									        <option>Perkeras Halaman</option>
									        <option>Instalasi/Utilitas</option>
									      </select>
								    </div>						    	
							    </div>						    							    	
						    </div>
						    <div>
						    	<span>Pemegang Hak</span>
						    	<span><input type="text" class="form-control" name="pemeganghak" required></span>
						    </div>
						    <div>
						    	<span>Status Hak</span>
						    	<span><input type="text" class="form-control" name="statushak" required></span>
						    </div>
						    <div>
						    	<span>Alamat Lokasi</span>
						    	<span><input type="text" class="form-control" name="lokasi" required></span>
						    </div>
						    <div>
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
						    <div>
						    <br>
					    	<span>Berkas</span>
					    	{!! Form::label('Berkas','File',array('id'=>'','class'=>'')) !!}
						    {!! Form::file('file','',array('id'=>'','class'=>'form-control')) !!}						    	
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
@stop