@extends('layouts.app')

@section('content')
<div class="mb-3">
	<h1>Lihat dan Beli Hewan Qurban Anda di Sini</h1>
</div>
@if (count($listhewan) > 0)
<div class="card-deck mb-5">
	@foreach ($listhewan as $hewan)
	<div class="card">
		<img class="card-img-top" src="{{ asset("storage/{$hewan->satugambarhewan->path}") }}"
			style="max-width: 100%;height: auto" alt=":v">
		<div class="card-body">
			<h5 class="card-title">{{ $hewan->nama }}</h5>
			<h6 class="card-text">Rp{{ $hewan->harga }}</h6>
			<a class="btn btn-primary" href="{{ url("/hewan/$hewan->id") }}">Lihat</a>
		</div>
	</div>
	@endforeach
</div>
{{ $listhewan->links() }}
@else
<p>Tidak ada hewan tersedia :(</p>
@endif
@endsection