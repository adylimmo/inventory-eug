@extends('layouts.main')
@section('head')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{asset('sumernote/summernote.css')}}">
@stop
@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<a class="btn btn-warning" onClick="history.go(-1);">Batal</a>
		</div>
		<div class="panel-body">
			<form action="{{url('admin/updatejuga')}}" method="post">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="hidden" name="id" value="{{$data->id}}">
					<input type="text" name="title" id="title" value="{{$data->title}}" class="form-control">
				</div>
				<div class="form-group">
					<label for="title">Kategori</label>
					<select class="form-control" name="id_kategori">
					@foreach($kategori as $datap)
						<option value="{{$datap->id_category}}">{{$datap->nama_category}}</option>
					@endforeach
					</select>
				</div>
				<div class="form-group">
					<textarea id="summernote" name="summernote" class="form-control">
					{!!$data->detail!!}
					</textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="send" id="send" value="Publish" class="btn btn-success">
					<input type="button" name="clear" id="clear" class="btn btn-danger pull-right" value="Clear">
					{!!csrf_field()!!}
				</div>
			</form>

		</div>
	</div>
@endsection
@section('footer')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('sumernote/summernote.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#summernote').summernote({
                height:'300px',
            })  
        })

        $('#clear').on('click',function(){
            $('#summernote').summernote('code',null);   
        })
    </script>
    @stop