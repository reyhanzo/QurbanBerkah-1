@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Pengguna</h1>

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
				<td>Sek kosong</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

