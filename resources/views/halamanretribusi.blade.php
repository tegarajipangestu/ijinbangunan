@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
					<div class="contact_info">
			    	 	<h2>Peta Peruntukan</h2>
			    	 		<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56211042151!2d107.64315755000001!3d-6.903449449999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C+Bandung+City%2C+West+Java!5e0!3m2!1sen!2sid!4v1430168271061" width="100%" height="450" frameborder="0" style="border:0"></iframe>					   		
					   			<br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">Tampilkan peta lebih besar</a></small>
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
				  	<h2>Total Retribusi yang dibayarkan</h2>
				  	<h3>Bangunan permohonan anda berkategori : <?php echo $_COOKIE["bangunan"]; ?></h3>
				  	<h3>Total retribusi yang harus dibayarkan sejumlah Rp1.100.000,00 x 100 x 1% = Rp1.100.000,00</h3>
				  	<p>Silahkan kirim retribusi anda di :</p>
				  	<p>Rekening Bank Ardi : 123-456-789 a.n Dinas Tata Ruang Kota Bandung</p>
				  </div>
				  <a href="showijin"><button class="button-huba">Kembali ke Daftar Ijin</button></a>	
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
@stop