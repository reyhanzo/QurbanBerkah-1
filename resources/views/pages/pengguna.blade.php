@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Daftar Pengguna</div>

				<div class="card-body">
					@include('layouts.messages')
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
		</div>
	</div>
</div>
@endsection

