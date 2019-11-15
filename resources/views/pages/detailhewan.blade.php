@extends("layouts.app")

@section("content")
<div class="mb-3">
	<a class="btn btn-danger" href="{{ url("/hewan") }}">Kembali</a>
</div>
<div class="row">
	<div class="col-4">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				@foreach ($gambar as $x)
				@if ($loop->first)
				<div class="carousel-item active">
					@else
					<div class="carousel-item">
						@endif
						<img class="d-block w-100" src="{{ asset("storage/$x->path") }}" alt="Gambar">
					</div>
					@endforeach
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="col-8">
			<p>{{ $hewan->id }}</p>
			<p>{{ $hewan->nama }}</p>
			<p>{{ $hewan->deskripsi }}</p>
			<p>Rp{{ $hewan->harga }}</p>
		</div>
	</div>
	@endsection

