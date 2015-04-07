@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				</div>
				<div class="col-md-10">
				  <div class="contact-form">
					<h2>Daftar Permohonan Ijin Mendirikan Bangunan</h2>
					<br>
					@foreach ($permohonans as $permohonan)						
						<div style="background-color:#F0F0F0;padding:15px;margin:15px">
							<h3>{{$permohonan->username}}</h3>
							<p>Pemegang Hak : {{$permohonan->pemeganghak}}</p>							
							<h4>Lokasi Bangunan : {{$permohonan->lokasi}}</h4>							
							<p>Jenis : {{$permohonan->jenis}}</p>
							<p>Kategori : {{$permohonan->kategori}}</p>
							<p>Luas Tanah : {{$permohonan->luas}} meter persegi</p>							
							@if ($permohonan->statushak=='Diproses')
							<p style="float:right;color:black"><b>Status Hak : {{$permohonan->statushak}}</b></p>
							@elseif ($permohonan->statushak=='Ditolak')														
							<p style="float:right;color:red"><b>Status Hak : {{$permohonan->statushak}}</b></p>
							@elseif ($permohonan->statushak=='Diterima')														
							<p style="float:right;color:green"><b>Status Hak : {{$permohonan->statushak}}</b></p>
							@endif
						</div>
					@endforeach
	  				</div>
	  				<br>						
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
@stop