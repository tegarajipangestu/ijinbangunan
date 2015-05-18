@extends('app')

@section('content')
<!-- start: Content -->
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Tambah Pengajar</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form class="form-horizontal" action="createpengajar" method="post">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<fieldset>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Nama Lengkap</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" name="nama_pengajar">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Alamat</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" name="alamat_pengajar">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Kontak</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" name="kontak_pengajar">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="selectError">Mata Kuliah</label>
						<div class="controls">
						  <select id="selectError" data-rel="chosen" name="matkul_pengajar">
							<option>Kalkulus</option>
							<option>Fisika Dasar</option>
							<option>Kimia Dasar</option>
							<option>PTI</option>
							<option>PAR</option>
						  </select>
						</div>
					  </div>
  					  <div class="control-group">
						<label class="control-label" for="selectError">Jadwal</label>
						<div class="controls">
						  <select id="selectError1" data-rel="chosen" name="hari">
							<option>Senin</option>
							<option>Selasa</option>
							<option>Rabu</option>
							<option>Kamis</option>
							<option>Jumat</option>
							<option>Sabtu</option>
							<option>Minggu</option>
						  </select>
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Jam Awal</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" name="jam_awal">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Jam Akhir</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" name="jam_akhir">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Username</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="text" name="username">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="focusedInput">Password</label>
						<div class="controls">
						  <input class="input-xlarge focused" id="focusedInput" type="password" name="password">
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