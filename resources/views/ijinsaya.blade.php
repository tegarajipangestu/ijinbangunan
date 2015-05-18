@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
				<div class="col-md-10">
				  <div class="contact-form">
					<h2>Daftar Permohonan Ijin Mendirikan Bangunan</h2>
					<h3>Atas nama : <?php echo $_COOKIE["username"]; ?></h3>
					<br>
					@foreach ($permohonans as $permohonan)						
						<div style="background-color:#F0F0F0;padding:15px;margin:15px">
							@if ($permohonan->statushak=='Diterima')
							<a href="printlaporan/{{$permohonan->permohonan_nomor}}">
								<h4>Nomor Permohonan : Distarcip/2015/IMB/01/{{$permohonan->permohonan_nomor}}</h4>
							</a>
							@else
								<h4>Nomor Permohonan : Distarcip/2015/IMB/01/{{$permohonan->permohonan_nomor}}</h4>
							@endif							
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
							<h4>Masa Berlaku ijin : tinggal <?php echo 365 - round((time()-strtotime($permohonan->created_at))/86400)
							; ?> hari lagi. <a href="perpanjangijin/{{$permohonan->permohonan_nomor}}">Perpanjang?</a></h4>
							@endif
						</div>
					@endforeach
	  				</div>
	  				<br>						
  				</div>		
</div>
</div>
@stop