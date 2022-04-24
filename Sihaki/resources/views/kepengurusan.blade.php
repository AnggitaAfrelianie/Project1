@extends('template_admin.home')

@section('content')

<h1>Tampilan Kepengurusan SIHAKI</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pengurus</th>
			<th>Jabatan</th>
			<th>Profil</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		@foreach ($kepengurusan as $data)
			<tr>
				<td> {{ $no++ }}</td>
				<td>{{$data-> nama}}</td>
				<td>{{$data-> jabatan}}</td>
				<td> <img src="{{ url('foto_pengurus/'.$data-> foto_pengurus)}}" width="100px"></td>
				<td>
					<a href="" class="btn btn-sm btn-success">Detail</a>
					<a href="" class="btn btn-sm btn-warning">Edit</a>
					<a href="" class="btn btn-sm btn-danger">Hapus</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<br>
@endsection
