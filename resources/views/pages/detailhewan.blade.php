@extends("layouts.app")

@section("content")
<div class="container">
	<h1 class="text-center">Detail hewan</h1>
	<div class="mb-3">
		<a class="btn btn-primary" href="{{ url("/hewan") }}">Kembali</a>
	</div>
	<div class="row">
		<div class="col-4">
			<div id="gambarhewan" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@if (!$hewan->gambarhewan->isEmpty())
					@foreach ($hewan->gambarhewan as $gambar)
					@if ($loop->index == 0)
					<div class="carousel-item active">
					@else
					<div class="carousel-item">
					@endif
						<img class="d-block w-100" src="{{ asset("storage/{$gambar->path}") }}" alt=":v">
					</div>
					@endforeach
					@else
					<div class="carousel-item active">
						<img class="d-block w-100" src="{{ asset("storage/default.png") }}" alt=":v">
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="col-8">
			@if (Auth::user() && Auth::user()->admin == 1)
			<p>{{ $hewan->id }}</p>
			@endif	
			<p><b>Nama Hewan</b> : {{ $hewan->nama }}</p>
			<p><b>Deskripsi Hewan</b></p>
			<p>{!! $hewan->deskripsi !!}</p>
			<p><b>Harga Hewan</b></p>
			<p>Rp{{ $hewan->harga }}</p>
			@if (Auth::user() && Auth::user()->admin!=1)
			{!! Form::open(["action" => ["TransaksiController@beli", $hewan->id], "method" => "POST"]) !!}
			{!! Form::submit("Beli", ["class" => "btn btn-primary"]) !!}
			{!! Form::close() !!}
			@endif
		</div>
	</div>
</div>
@endsection