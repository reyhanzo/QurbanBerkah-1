@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Detail pengguna "{{ $data["user"]->name }}"</h1>
	<div class="mb-3">
		<a class="btn btn-primary" href="{{ url("/pengguna") }}">Kembali</a>
	</div>
	<table class="table table-bordered">
		<thead>
			<tr class="bg-success">
				<td>ID transaksi</td>
				<td>Nama hewan</td>
				<td>Harga</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($data["transaksi"] as $x)
			<tr>
				<td>{{ $x->id }}</td>
				<td>{{ $x->hewan->nama }}</td>
				<td>Rp{{ $x->hewan->harga }}</td>
				<td>
					@if ($x->status == "Terbeli")
					<button class="btn btn-success">Terkonfirmasi</button>
					@else
					{!! Form::open(["action" => ["TransaksiController@konfirmasi", $x->id], "method" => "POST"]) !!}
					{!! Form::submit("Konfirmasi", ["class" => "btn btn-primary"]) !!}
					{!! Form::close() !!}
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection