@extends('admin/app')

@section('content')
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Daftar Semua Permohonan</h2>
			<div class="box-icon">
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
			  <thead>
				  <tr>
					  <th>Nomor</th>
					  <th>Nama Pemohon</th>
					  <th>Nama Pemegang Hak</th>
					  <th>Luas Tanah</th>
					  <th>Kategori</th>
					  <th>Lokasi</th>
					  <th>Jenis</th>
					  <th>Status</th>
					  <th>Aksi</th>
				  </tr>
			  </thead>   
			  <tbody>
				@foreach ($permohonans as $permohonan)						
				<tr>
					<td>{{$permohonan->permohonan_nomor}}</td>
					<td class="center">{{$permohonan->pemeganghak}}</td>
					<td class="center">{{$permohonan->pemeganghak}}</td>
					<td class="center">{{$permohonan->luas}}</td>
					<td class="center">{{$permohonan->kategori}}</td>
					<td class="center">{{$permohonan->lokasi}}</td>
					<td class="center">{{$permohonan->jenis}}</td>
					<td class="center">
						@if ($permohonan->statushak=='Diterima')
						<span class="label label-success">Diterima</span>
						@elseif ($permohonan->statushak=='Diproses' || $permohonan->statushak=='Proses Perpanjangan')
						<span class="label label-warning">Diproses</span>
						@elseif ($permohonan->statushak=='Ditolak')
						<span class="label label-important">Ditolak</span>
						@endif
					</td>
					<td class="center">
						@if ($permohonan->statushak=='Diterima')
						<a class="btn btn-danger" href="tolakijin/{{$permohonan->permohonan_nomor}}">
							<i class="halflings-icon white trash"></i> 
						</a>
						@elseif ($permohonan->statushak=='Diproses' || $permohonan->statushak=='Proses Perpanjangan')
						<a class="btn btn-success" href="terimaijin/{{$permohonan->permohonan_nomor}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-danger" href="tolakijin/{{$permohonan->permohonan_nomor}}">
							<i class="halflings-icon white trash"></i> 
						</a>
						@elseif ($permohonan->statushak=='Ditolak')
						<a class="btn btn-success" href="terimaijin/{{$permohonan->permohonan_nomor}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						@endif
					</td>
				</tr>
				@endforeach
			  </tbody>
		  </table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection
