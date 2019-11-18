@extends('layouts.app')

@section('content')
<div class="mb-3">
	<h1>Lihat dan Beli Hewan Qurban Anda di Sini</h1>
</div>

<?php $islogin = 0;
	if ( Auth::user() != Null ){
		if ( Auth::user()->admin == 0 ){
			$islogin = 1;
		}
		else{
			$islogin = 2;
		}
	}
echo $islogin
?>


@if (count($listhewan) > 0)
<div class="card-deck mb-5">
	@foreach ($listhewan as $hewan)
	<div class="card">
	@if($hewan->satugambarhewan == null)
	@else
		<img class="card-img-top" src="{{ asset('storage') }}/{{$hewan->satugambarhewan}}" style="max-width: 100%;height: auto" alt=":v">
	@endif
		<div class="card-body">
			<h5 class="card-title">{{ $hewan->nama }}</h5>
			<h6 class="card-text">Rp{{ $hewan->harga }}</h6>
			<a class="btn btn-primary" href="{{ url("/hewan/$hewan->id") }}">Lihat</a>
			@if ($islogin == 2 )
				<a class="btn btn-danger" href="{{ url("/hewan/$hewan->id") }}">Hapus</a>
			@endif
		</div>
	</div>
	@endforeach
</div>
{{ $listhewan->links() }}
@else
<p>Tidak ada hewan tersedia :(</p>
@endif
@if ( $islogin == 2 )
<a class="btn btn-primary" href="{{ url("/tambahhewan") }}">Tambah</a>
@endif
@endsection