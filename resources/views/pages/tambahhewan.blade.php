@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Tambah hewan</h1>
	<a class="btn btn-primary" href="{{ url("/hewan") }}">Kembali</a>

	<div class="my-2">
		{!! Form::open(["action" => "HewanController@store", "method" => "POST"]) !!}
		<div class="form-group">
			{!! Form::label("nama", "Nama hewan") !!}
			{!! Form::text("nama", "", ["class" => "form-control", "type" => "text"]) !!}
		</div>
	</div>
	{!! Form::close() !!}
</div>
@endsection