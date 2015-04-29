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
				  	<h2>Unggah Berkas</h2>
					    <form method="post" action="permohonan">
					    	<div class="unggah-box">
						    	<span>Unggah Bukti Pembayaran</span>
						    	{!! Form::label('Berkas','File',array('id'=>'','class'=>'')) !!}
							    {!! Form::file('buktitanah','',array('id'=>'','class'=>'form-control')) !!}					    		
					    	</div>
						   <div>
						   		<span><input type="submit" value="Unggah Bukti Pembayaran"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
</div><!--/row-->

<div class="modal fade" id="modalmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Peringatan</h4>
      </div>
      <div class="modal-body">
        <p>Unggah semua berkas yang dibutuhan</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection