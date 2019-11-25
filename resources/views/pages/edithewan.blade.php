@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Edit hewan</h1>
	<div class="mb-3">
		<a class="btn btn-primary" href="{{ url("/hewan") }}">Kembali</a>
	</div>

	<div class="my-2">
		{!! Form::open(["action" => ["HewanController@update", $hewan->id], "method" => "PUT", "files" => true]) !!}
		<div class="row">
			<div class="col-4">
				<p>Edit gambar di sini</p>
			</div>
			<div class="col-8">
				
				<div class="form-group">
					{!! Form::label("nama", "Nama hewan") !!}
					{!! Form::text("nama", $hewan->nama, ["class" => "form-control"]) !!}
				</div>

				<div class="form-group">
					{!! Form::label("deskripsi", "Deskripsi hewan") !!}
					{!! Form::textarea("deskripsi", $hewan->deskripsi, ["class" => "form-control"]) !!}
				</div>

				<div class="form-group">
					{!! Form::label("harga", "Harga hewan") !!}
					{!! Form::text("harga", $hewan->harga, ["class" => "form-control"]) !!}
				</div>
			</div>
		</div>
		{!! Form::submit("Selesai", ["class" => "btn btn-primary"]) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection