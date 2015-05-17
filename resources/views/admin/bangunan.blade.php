@extends('admin/app')

@section('content')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Daftar Semua Peruntukan Lahan</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Nomor Kecamatan</th>
					  <th>Nama Kecamatan</th>
					  <th>Peruntukan lahan</th>
					  <th>Huba</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($permohonans as $permohonan)						
				<tr>
					<td>{{$permohonan->id_kecamatan}}</td>
					<td class="center">{{$permohonan->nama_kecamatan}}</td>
					<td class="center">{{$permohonan->peruntukkan}}</td>
					<td class="center">
						<span class="label label-success">Diterima</span>
						<!-- <span class="label label-warning">Diproses</span> -->
						<!-- <span class="label label-important">Ditolak</span> -->
					</td>
				</tr>
				@endforeach
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection
