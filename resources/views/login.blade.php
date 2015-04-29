@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-offset-4 col-md-4">
				  <div class="contact-form">
				  	<h2>Silahkan Login untuk Masuk</h2>
					    <form method="post" action="login">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">							
							<div>
						    	<span>Nomor Induk Kependudukan (NIK)</span>
						    	<input type="text" class="form-control" name="username" required>
						    </div>
						    <div>
						    	<span>Password</span>
						    	<input type="password" class="form-control" name="password" required>
						    </div>
						   <div>
						   		<span><input type="submit" value="Login"></span>
						  </div>
					    </form>
				    </div>
				</div>
  				<div class="clearfix"></div>		
		  </div> <!-- end contact -->
</div>
</div>
@stop