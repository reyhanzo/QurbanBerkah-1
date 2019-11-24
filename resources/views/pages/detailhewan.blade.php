@extends("layouts.app")

@section("content")
<div class="container">
	<div id="gambarhewan" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="row">
				<div class="col-4">
					@if (!$hewan->gambarhewan->isEmpty() && $hewan->gambarhewan->path != null)
					@foreach ($hewan->gambarhewan as $gambar)
					@if ($loop->index == 0)
					<div class="carousel-item active">
					@else
					<div class="carousel-item">
					@endif
						<img class="d-block w-100" src="{{ asset("storage/{$hewan->gambarhewan->path}") }}" alt=":v">
					</div>
					@endforeach
					@else
					<div class="carousel-item active">
						<img class="d-block w-100" src="{{ asset("storage/default.png") }}" alt=":v">
					</div>
					@endif
				</div>
				<div class="col-8">
					<p>{{ $hewan->id }}</p>
					<p>{{ $hewan->nama }}</p>
					<p>{{ $hewan->deskripsi }}</p>
					<p>Rp{{ $hewan->harga }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection