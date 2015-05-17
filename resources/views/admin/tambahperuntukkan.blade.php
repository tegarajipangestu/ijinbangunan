@extends('admin/app')

@section('content')

	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Tambah Peruntukkan Lahan</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="tambahperuntukkan" method="post">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Nama Kecamatan</label>
						<div class="controls">
					      <select id="kecamatan" class="form-control" name="kecamatan" required>
					      	@foreach ($kecamatans as $kecamatan)
					      	<option>{{$kecamatan->nama_kecamatan}}</option>
					      	@endforeach
					      </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Peruntukan Lahan</label>
						<div class="controls">
					      <select id="kecamatan" class="form-control" name="peruntukkan" required>
					      	@foreach ($peruntukkans as $peruntukkan)
					      	<option>{{$peruntukkan->peruntukkan}}</option>
					      	@endforeach
					      </select>
						</div>
					  </div>
					  <div class="form-actions">
						<button type="submit" class="btn btn-primary">Tambahkan</button>
					  </div>
					</fieldset>
				  </form>
			
			</div>
		</div><!--/span-->
	</div><!--/row-->
@endsection