@extends('layouts.app')

@section('content')
<div class="container">
	<div class="mb-3 text-center">
		<h1 class="text-center">Pengguna</h1>
	</div>

	<table class="table table-bordered">
		<thead>
			<tr class="bg-success">
				<th>Pengguna</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pengguna as $x)
			<tr>
				<td>{{ $x->name }}</td>
				<td>
					<a class="btn btn-primary" href="{{ url("/pengguna/$x->id") }}">Lihat</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

