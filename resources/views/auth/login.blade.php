@extends('app')

@section('content')

<div class="main"><!-- start main -->
<div class="container">
			<div class="row contact"><!-- start contact -->				
				<div class="col-md-offset-4 col-md-4">
				  <div class="contact-form">
				  	<h2>Silahkan Login untuk Masuk</h2>
					    <form method="post" action="{{url('login')}}" id="loginForm">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">							
							<div>
						    	<span>Nomor Induk Kependudukan (NIK)</span>
						    	<input type="text" class="form-control" name="nik" required id="nik" placeholder="NIK">
						    </div>
						    <div>
						    	<span>Password</span>
						    	<input type="password" class="form-control" name="password" required id="password" placeholder="Password">
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

<script>
	$('#loginForm').submit(function(e) {
    var nik = $('#nik').val();
    var password = $('#password').val()
    $.ajax({
        url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/login',
        type: 'POST',
        data: { nik: nik, password : password} ,
        success: function (response) {
            console.log(response.id)
            // <!-- for (var i = 0; i < 2000000000; ++i); -->
            // <!-- return false; -->
            return true;
            },
            error: function (err) {
            // <!-- alert(err); -->
            // <!-- console.log(err) -->
            // <!-- return false; -->
            }
        });
        for (var i = 0; i < 2000000000; ++i);
    })
</script>
@stop
