@extends('layouts.app')

@section('content')
<div class="container">
	<div class="text-center">
		<h1>Lihat dan Beli Hewan Qurban Anda di Sini</h1>
	</div>
	@include('layouts.messages')
	@if (Auth::user() && Auth::user()->admin == 1)
	<div class="mb-3">
		<a class="btn btn-primary" href="{{ url("/hewan/create") }}">Tambah</a>
	</div>
	@endif

	@if (count($listhewan) > 0)
	<div class="row">
		@foreach ($listhewan as $hewan)
		<div class="col-4">
			<div class="card">
			@if (!$hewan->gambarhewan->isEmpty() && $hewan->gambarhewan[0]->path != null)
				<img class="card-img-top mw-100" src="{{ asset("storage/{$hewan->gambarhewan[0]->path}") }}" alt=":v">
			@else
				<img class="card-img-top mw-100" src="{{ asset("storage/default.png") }}" alt=":v">
			@endif	
				<div class="card-body">
					<h4 class="card-title">{{ $hewan->nama }}</h4>
					<p class="card-text">Rp{{ $hewan->harga }}</p>
					<a class="card-link btn btn-primary" href="{{ url("/hewan/{$hewan->id}") }}">Lihat</a>
					@if (Auth::user() && Auth::user()->admin == 1)
					<a class="card-link btn btn-primary" href="{{ url("hewan/{$hewan->id}/edit") }}">Edit</a>
					<a class="card-link btn btn-danger" href="{{ url("hewan/{$hewan->id}") }}">Hapus</a>
					@endif
				</div>
			</div>
		</div>
	@if ($loop->iteration % 3 == 0)
	</div>
	@endif
		@endforeach
	@else
	<div class="jumbotron text-center">
		<h1>Tidak ada hewan tersedia :(</h1>
	</div>
	@endif
	
</div>


@endsection