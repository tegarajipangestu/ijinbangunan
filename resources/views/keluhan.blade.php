@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-4">
				  <div class="contact-form">
				  	<h2>Isi Keluhan Anda Disini</h2>
					    <form method="post" action="keluhan">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">							
							<div>
						    	<span>Nama</span>
						    	<input type="text" class="form-control" name="nama" value="<?php echo $_COOKIE["username"] ?>" required>
						    </div>
						    <div>
						    	<span>E-mail</span>
						    	<input type="email" class="form-control" name="email" required>
						    </div>
						    <div>
						    	<span>Isi Keluhan</span>
						    	<textarea class="form-control" name="isikeluhan" required></textarea>
						    </div>
						   <div>
						   		<span><input type="submit" value="Kirim Keluhan"></span>
						  </div>
					    </form>
				    </div>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
					<h2>Daftar Keluhan Masyarakat</h2>
					<br>
					@foreach ($keluhans as $keluhan)
						
						<div style="background-color:#F0F0F0;padding:10px;margin:10px">
							<h4>{{$keluhan->isikeluhan}}</h4>
							<p>{{$keluhan->nama}} - {{$keluhan->email}}</p>							
						</div>

					@endforeach
	  				</div>							
  				</div>		
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
@stop