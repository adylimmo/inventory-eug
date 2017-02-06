@extends('layouts.main')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<a class="btn btn-danger" href="{{url('admin/tulis')}}">Tambah Data</a>
		<form action="{{ url('query') }}" method="GET" class="pull-right">
			<input type="text" name="q">
			<button class="btn btn-primary" type="submit">Cari</button>
		</form>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-responsive">
			<thead>
				<tr>
					<th>Title</th>
					<th>Kategori</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $d)   
				<tr>
					<td>{{$d->title}}</td>
					<td>{{$d->nama_category}}</td>
					<td>
						<a class="btn btn-danger" href="{{url('baca',$d->slug)}}">View</a>
						<a class="btn btn-warning" href="{{url('admin/edit',array($d->id))}}">Edit</a>
						<a class="btn btn-warning" href="{{url('hapus',array($d->id))}}">Hapus</a>
						<td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<ul class="pagination pagination-sm pull-right"> {{ $data->render() }}</ul>
			</div>
			<div class="panel-footer">
				<h4>Halaman Admin</h4>
			</div>
		</div>
		@endsection